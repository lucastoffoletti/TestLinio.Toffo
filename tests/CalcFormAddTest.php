<?php
/**
 * Created by PhpStorm.
 * User: lucas.toffoletti
 * Date: 21/11/2019
 */

namespace toffo\PHP;
use PHPUnit\Framework\TestCase;


class CalcFormAddTest extends  TestCase
{

    private $_calcForm;


    public function setUp(){

        $this ->_calcForm = new CalcForm();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(3,3));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(12,3));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(27,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(5,5));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(50,5));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(50,5));
    }

    public function  testThreeAndFive(){

        $this->assertEquals(0,$this->_calcForm->addRemainder(0,0));
        $this->assertEquals(0,$this->_calcForm->addRemainder(($this->_calcForm->calcRemainder(15,5)),($this->_calcForm->calcRemainder(15,3))));


    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(4,3));
        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(7,5));
        $this->assertNotEquals(0,$this->_calcForm->addRemainder(1,0));
        $this->assertNotEquals(0,$this->_calcForm->addRemainder(($this->_calcForm->calcRemainder(17,5)),($this->_calcForm->calcRemainder(17,3))));
    }
}
