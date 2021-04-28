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
            'target'      => 'https://moodle.thi.de/moodle/my/',
        ],
        'o'            => [
            'description' => 'KU Opac',
            'target'      => 'https://opac-ku-de.thi.idm.oclc.org/index-hi.html',
        ],
        'cal'          => [
            'description' => 'Stundenplan',
            'target'      => 'https://www3.primuss.de/stpl/index.php?FH=fhin&Language=de'
        ],
        'print'        => [
            'description' => 'Drucker',
            'target'      => 'https://print.thi.de'
        ],
        'libs'        => [
            'description' => 'Literatur Datenbanken Index (EZproxy)',
            'target'      => 'http://thi.idm.oclc.org/menu'
        ],
        'ieee'        => [
            'description' => 'IEEE Login',
            'target'      => 'http://thi.idm.oclc.org/login?url=http://ieeexplore.ieee.org/search/advsearch.jsp'
        ],
        'cloud'        => [
            'description' => 'OwnCloud Share',
            'target'       => 'https://oc.my-thi.ml/s/WX5uB9GDlGGS7jE'
        ],
        'wapp1920'        => [
            'description' => 'WApp Gruppe WS1920',
            'target'      => 'https://chat.whatsapp.com/BW7c3CdqtHZHFdr5oL0bJ5'
        ],
        /*'live'         => [
            'description' => 'Livestreams und Aufzeichnungen von Vorlesungen',
            'target'      => 'https://live.rbg.tum.de',
        ],*/
        /*'stuff'        => [
            'description' => 'Unistuff (ehemals Tumstuff)',
            'target'      => 'https://unistuff.org',
        ],*/
        // SEM 1
        'gp1'          => [
            'description' => 'Grundlagen der Programmierung 1',
            'moodle_id'   => '76'
        ],
        'pgp1'         => [
            'description' => 'Praktikum Grundlagen der Programmierung 1',
            'moodle_id'   => '2845'
        ],
        'ra'           => [
            'description' => 'Rechnerarchitektur',
            'moodle_id'   => '1100'
        ],
        'rap'          => [
            'description' => 'Praktikum Rechnerarchitektur',
            'moodle_id'   => '6247'
        ],
        'peg'          => [
            'description' => 'Physikalische und Elektrotechnische Grundlagen',
            'moodle_id'   => '1059'
        ],
        'en'           => [
            'description' => 'English for Informatics',
            'moodle_id'   => '5766'
        ],
        'ffi_mathe1'   => [
            'description' => 'Mathematische Grundlagen1; Analysis',
            'moodle_id'   => '60'
        ],
        'ffi_mathe1ü' => [
            'description' => 'Übungen zu Mathematische Grundlagen1; Analysis',
            'moodle_id'   => '2445'
        ],
        'mathe1'       => [
            'description' => 'Mathematische Grundlagen 1',
            'moodle_id'   => '3825'
        ],
        'mathe1inf'    => [
            'description' => 'Mathematische Grundlagen der Informatik 1',
            'moodle_id'   => '1751'
        ],
        // SEM 2
        'gp2'          => [
            'description' => 'Grundlagen der Programmierung 2',
            'moodle_id'   => '6555'
        ],
        'gp2p'         => [
            'description' => 'Praktikum Grundlagen der Programmierung 2',
            'moodle_id'   => '6556'
        ],
        'apa'         => [
            'description' => 'APA-Service',
            'moodle_id'   => '1489'
        ],
        'tmmi'         => [
            'description' => 'Technik der Menschinen Interaktion',
            'moodle_id'   => '6662'
        ],
        'mgl2'         => [
            'description' => 'Mathematische Grundlagen 2 [Lorencka]',
            'moodle_id'   => '4130'
        ],
        'ffi_mg2'   => [
            'description' => 'Mathematische Grundlagen2 [Rößl]; Analysis',
            'moodle_id'   => '62'
        ],
        'ffi_mgü2' => [
            'description' => 'Übungen zu Mathematische Grundlagen2 [Rößl]; Analysis',
            'moodle_id'   => '2445'
        ],
        'bs'           => [
            'description' => 'Betriebssysteme',
            'moodle_id'   => '572'
        ],
        'rn'           => [
            'description' => 'Rechnernetze',
            'moodle_id'   => '1754'
        ],
        'rnp'          => [
            'description' => 'Rechnernetze Praktikum',
            'moodle_id'   => '3125'
        ],
        // SEM 3
        'vts'       => [
            'description' => 'Verteilte Systeme',
            'moodle_id'   => '1460'
        ],
        'web'       => [
            'description' => 'Webtechnologien',
            'moodle_id'   => '454'
        ],
        'wbs'       => [
            'description' => 'Wissensbasierte Systeme',
            'moodle_id'   => '6369'
        ],
        'aud'       => [
            'description' => 'Algorithmen und Datenstrukturen',
            'moodle_id'   => '1994'
        ],
        'se'       => [
            'description' => 'Software Engineering',
            'moodle_id'   => '6830'
        ],
        'sep'       => [
            'description' => 'Software Engineering Praktikum',
            'moodle_id'   => '6831'
        ],
        // SEM 4
        'cg'         => [
            'description' => 'Computergrafik',
            'moodle_id'   => '310'
        ],
        'dm'         => [
            'description' => 'Diskrete Mathematik 1',
            'moodle_id'   => '5497'
        ],
        'dbs'         => [
            'description' => 'Datenbanksysteme',
            'moodle_id'   => '1693'
        ],
        'pm'         => [
            'description' => 'Projektmanagement (Eibel)',
            'moodle_id'   => '6479'
        ],
        'gthi'      => [
            'description' => 'Grundlagen der Theoretischen Informatik',
            'moodle_id'   => '312'
        ],
        'semweigel' => [
            'description' => 'Seminar "Funkkommunikationssysteme"',
            'moodle_id'   => '3482'
        ],
        'semebert' => [
            'description' => 'Seminar (FFI) Ebert',
            'moodle_id'   => '6609'
        ],
        'semgold' => [
            'description' => 'Fachwissenschaftliches Seminar',
            'moodle_id'   => '1518'
        ],
        'semhahndel' => [
            'description' => 'Seminar "IT Sicherheit"',
            'moodle_id'   => '6075'
        ],
        // SEM 6
        'plv3' => [
            'description' => 'Informations- und Medienkompetenz (PLV3 INF/FFI)',
            'moodle_id'   => '5940'
        ],
        'bwl' => [
            'description' => 'Grundlagen der Betriebswirtschaft und des Gründertums',
            'moodle_id'   => '7159'
        ],
        'sc' => [
            'description' => 'Statistik und Kombinatorik',
            'moodle_id'   => '3826'
        ],
        'itsec' => [
            'description' => 'IT Sicherheit',
            'moodle_id'   => '2494'
        ],
        'itr' => [
            'description' => 'IT Recht',
            'moodle_id'   => '5403'
        ],
        // WPF
        'fjp' => [
            'description' => 'Fortgeschrittene JAVA-Programmierung ',
            'moodle_id'   => '1881'
        ],
        'jbca' => [
            'description' => 'Java Based Cloud Architectures',
            'moodle_id'   => '1584'
        ]
    ];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        'calendar' => 'cal',
        'gdp1'     => 'gp1',
        'pgdp1'    => 'pgp1',
        'engl'     => 'en',
        'pra'      => 'rap',
        'ffi_mathe1u'        => 'ffi_mathe1ü',
        'xn--ffi_mathe1-jeb' => 'ffi_mathe1ü',
        'gdp2'     => 'gp2',
        'gdp2p'     => 'gp2p',
        'ffi_mgu2'        => "ffi_mgü2",
        'xn--ffi_mg2-s2a' => "ffi_mgü2"
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        '1. Semester' => [
            'gp1',
            'pgp1',
            'ra',
            'rap',
            'peg',
            'en',
            'mathe1',
            'mathe1inf',
            'ffi_mathe1',
            //'ffi_mathe1ü'
        ],
        '2. Semester' => [
            'gp2',
            'gp2p',
            'apa',
            'tmmi',
            'mgl2',
            //'mgl2u',
            'ffi_mg2',
            'ffi_mgü2',
            'bs',
            'rn',
            'rnp'
        ],
        '3. Semester' => [
            'vts',
            'web',
            'wbs',
            'aud',
            'se',
            'sep'
        ],
        '4. Semester' => [
            'cg',
            //'cgp',
            'dm',
            'dbs',
            //'dbsp'
            'pm',
            'gthi',
            'semweigel',
            'semebert',
            'semgold',
            'semhahndel'
        ],
        '5. Semester' => [],
        '6. Semester' => [
            'plv3',
            'bwl',
            'sc',
            'itsec',
            'itr'
        ],
        '7. Semester' => [],
        'Wahl Fächer' => [
            'fjp',
            'jbca'
        ],
        'Special'     => [
            'm',
            'p',
            'o',
            'cal',
            'print',
            'ieee',
            'libs'
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
