<?php

class Route {
    private $routes = [
        'hunger'       => [
            'description' => 'Reimanns & Mensa Speiseplan',
            'target'      => 'https://my-thi.ml/hunger',
        ],
        /*'mensabot'     => [
            'description' => 'TUMMensabot für Telegram',
            'target'      => 'https://t.me/TUMMensabot',
        ],
        'mensabot2'    => [
            'description' => 'Hübscher Telegram-MensaBot',
            'target'      => 'https://t.me/MensaMUCBot',
        ],
        'roombot'      => [
            'description' => 'Roomfinder als Telegram Bot',
            'target'      => 'https://t.me/tumroomsbot',
        ],
        'room'         => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],*/
        'p'            => [
            'description' => 'PRIMUSS',
            'target'      => 'https://www3.primuss.de/cgi-bin/login/index.pl?FH=fhin',
        ],
        'm'            => [
            'description' => 'Moodle',
            'target'      => 'https://moodle.thi.de/moodle/login/index.php',
        ],
        'o'            => [
            'description' => 'KU Opac',
            'target'      => 'https://opac-ku-de.thi.idm.oclc.org/index-hi.html',
        ],
        'cal'          => [
            'description' => 'Studneplan',
            'target'      => 'https://www3.primuss.de/stpl/index.php?FH=fhin&Language=de'
        ],
        /*'live'         => [
            'description' => 'Livestreams und Aufzeichnungen von Vorlesungen',
            'target'      => 'https://live.rbg.tum.de',
        ],*/
        /*'stuff'        => [
            'description' => 'Unistuff (ehemals Tumstuff)',
            'target'      => 'https://unistuff.org',
        ],*/
        'gp1'          => [
            'description' => 'Grundlagen der Programmierung 1',
            'moodle_id'   => '76'
        ],
        'ra'           => [
            'description' => 'Rechnerarchitektur',
            'moodle_id'   => '1100'
        ],
        'peg'          => [
            'description' => 'Physikalische und Elektrotechnische Grundlagen',
            'moodle_id'   => '1059'
        ],
        'en'           => [
            'description' => 'English for Informatics',
            'moodle_id'   => '5766'
        ],
        'mathe1'       => [
            'description' => 'Mathematische Grundlagen 1',
            'moodle_id'   => '3825'
        ]
    ];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        'calendar' => 'cal',
        'gdp1' => 'gp1',
        'engl' => 'en'
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        '1. Semester' => [
            'gp1',
            'ra',
            'peg',
            'en',
            'mathe1'
        ],
        '2. Semester' => [],
        '3. Semester' => [],
        '4. Semester' => [],
        '5. Semester' => [],
        '6. Semester' => [],
        '7. Semester' => [],
        'Special'     => [
            'm',
            'p',
            'o',
            'cal'
        ],
        'Electives'   => [],
    ];

    public function getTargetOfSub($host) {
        //Split up the requested host into parts and filter out unneeded info
        $domain = explode('.', $host);
        $domain = array_filter($domain, function ($e) {
            return $e !== 'ml' && $e !== 'my-thi' && $e !== 'www';
        });

        //DEPRECATED - First item should be a site type: tutor, moodle or other
        $siteType = null;
        if (count($domain) > 1) {
            $siteType = array_shift($domain);
        }
        $redirectUrl = array_shift($domain);

        //Static route to return the route array as json
        if ($redirectUrl === 'json') {
            header('Content-type: application/json');
            die(json_encode($this->routes));
        }

        //Yea, we have multiple names for the same thing
        if (isset($this->synonyms[$redirectUrl])) {
            $redirectUrl = $this->synonyms[$redirectUrl];
        } //Moodle support; Example: mgad.my-thi.ml
        else {
            if (strlen($redirectUrl) > 1 && $redirectUrl[0] == 'm' && !isset($this->routes[$redirectUrl])) {
                $redirectUrl = substr($redirectUrl, 1);
                $siteType = 'm';
                //Allow for synonyms as well in moodle redirects
                if (isset($this->synonyms[$redirectUrl])) {
                    $redirectUrl = $this->synonyms[$redirectUrl];
                }
            }
        }

        //If it does not exist? Go to main page
        if (!isset($this->routes[$redirectUrl])) {
            return 'https://my-thi.ml/';
        }
        //If target does not exist? Try moodle course
        else if (!isset($this->routes[$redirectUrl]['target'])){
            if (isset($this->routes[$redirectUrl]['moodle_id'])){
                $siteType = 'm';
            }
            //If target and moodle course does not exist? Go to main page
            else {
                return 'https://my-thi.ml/';
            }
        }

        //In case we actually want to go to a different target than the actual redirect
        switch ($siteType) {
            case 'm' :
                // This is a moodle redirect like m.info1.my-thi.ml
                $moodle_id = $this->routes[$redirectUrl]['moodle_id'];
                if (!isset($moodle_id)) {
                    return $this->routes[$redirectUrl]['target'];  // Fallback to target if moodle id is unknown
                }

                return 'https://moodle.thi.de/moodle/course/view.php?id=' . $moodle_id;
        }

        return $this->routes[$redirectUrl]['target'];
    }

    public function getResolvedArrays() {
        $ret = [];

        sort($this->sections['Electives']);

        //Iterate over our sections which can contain any number of routes
        foreach ($this->sections as $section => $subs) {
            $ret[$section] = [];

            //Iterate over all routes in current section
            foreach ($subs as $sub) {

                //Resolve the route and add to final array
                $ret[$section][] = ['desc' => $this->routes[$sub]['description'], 'sub' => $sub];
            }
        }

        return $ret;
    }

}
