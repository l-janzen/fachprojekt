<?php 

namespace FachProjekt\Tests; 

use PHPUnit\Framework\TestCase;
use FachProjekt\HelloWorld; 

class HelloWorldTest extends TestCase
{

    public function testSayHi()
    {
        $helloWorld = new HelloWorld(); 
        
        $this->assertTrue("Hello World", $helloWorld->sayHi()); 
    }
}