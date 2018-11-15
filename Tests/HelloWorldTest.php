<?php 
require_once 'PHPUnit/Autoload.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase
{

    public function testSayHi()
    {
        $this->assertTrue(true); 
    }
}