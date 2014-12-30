<?php
require_once '../src/Calc.php';
class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        //$this->assertArrayHasKey('foo', array('bar' => 'baz'));
        $this->assertTrue(true);
    }
    
    public function testSoma()
    {
        $valor1 = 2;
        $valor2 = 3;
        $calc = new Calc();
        $this->assertEquals(5, $calc->soma($valor1, $valor2));
    }    
}