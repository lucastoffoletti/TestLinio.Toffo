<?php
/**
 * Created by PhpStorm.
 * User: lucas.toffoletti
 * Date: 21/11/2019
 */

namespace toffo\PHP;
use PHPUnit\Framework\TestCase;


class WriterTest extends TestCase
{
    private $_writer;
    private $_result;

    public function prepare($remainder35,$remainder5,$remainder3,$number){
        $this->_writer = new \stdClass();
        $this->_result = new \stdClass();
        $this->_result = new Result();
        $this->_writer = new Writer();
        $this->_result->remainder35 = $remainder35;
        $this->_result->remainder5 = $remainder5;
        $this->_result->remainder3 = $remainder3;
        $this->_result->number = $number;
    }


    public function testWriterRemainder35(){
        $this->prepare(0,0,0,15);
        $this->expectOutputString("Linianos\n");
        $this->_writer->writeAnswer($this->_result);

    }

    public function testWriterRemainder5(){
        $this->prepare(1,0,1,50);
        $this->expectOutputString("IT\n");
        $this->_writer->writeAnswer($this->_result);

    }

    public function testWriterRemainder3(){
        $this->prepare(1,1,0,9);
        $this->expectOutputString("Linio\n");
        $this->_writer->writeAnswer($this->_result);
    }

    public function testNone(){
        $this->prepare(1,1,1,17);
        $this->expectOutputString("17\n");
        $this->_writer->writeAnswer($this->_result);
    }
}
