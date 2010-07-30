<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/../../src/Running/Vdot.php';

class Running_VdotTest extends PHPUnit_Framework_TestCase
{
    function testCalculate()
    {
        $hours = 0;
        $mins = 12;
        $secs = 53;
        $dist = 5;
        $vdot = new Running_Vdot;
        $vo2 = $vdot->calculate($hours, $mins, $secs, $dist);
        $this->assertEquals(83, $vo2);
    }
}