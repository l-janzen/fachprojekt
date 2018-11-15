<?php 

namespace FachProjekt\Tests; 

use PHPUnit\Framework\TestCase;

require_once "../HelloWorld.php"; 

class HelloWorldTest extends TestCase
{

    public function testSayHi()
    {
        $helloWorld = new HelloWorld(); 
        
        $this->assertTrue("Hello World", $helloWorld->sayHi()); 
    }
}