<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();

        // Normal redirect
        $this->assertEquals('https://my-thi.ml/hunger', $router->getTargetOfSub('hunger.my-thi.ml'));

        // Not found redirect
        $this->assertEquals('https://my-thi.ml/', $router->getTargetOfSub('kjhdsfjkdfsgkjldsfgkjl.my-thi.ml'));

        // SiteType redirect to moodle
        $this->assertStringContainsString('https://moodle.thi.de/moodle/course/view.php?id=76', $router->getTargetOfSub('gp1.my-thi.ml'));

        // Normal redirect still works, even if it has moodle type assigned
        //$this->assertStringContainsString('https://moodle.thi.de/moodle/course/view.php?id=76', $router->getTargetOfSub('gp1.my-thi.ml'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }
}
