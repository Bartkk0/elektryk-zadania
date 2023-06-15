<?php

require_once 'DataCompare.php';

use PHPUnit\Framework\TestCase;

class DataCompareTest extends TestCase
{
    public function test1()
    {
        $this->dataCompare = new DataCompare(true);

        $expected = array(
            'a'=>123,
            'b'=>'str',
            'c'=>false
        );
        $result = $this->dataCompare->readDataFromFile('data1.csv');
        $this->assertTrue($result);
        $this->assertEquals($expected, $this->dataCompare->data);
    }

    public function test2(){
        $this->dataCompare = new DataCompare(false);

        $expected = "'d','e','f'\n456,'chr','true'";
        $result = $this->dataCompare->readDataFromFile('data2.csv');
        $this->assertTrue($result);
        $this->assertEquals($expected, $this->dataCompare->data);
    }

    public function test3(){
        $this->dataCompare = new DataCompare(false);

        $expected = "789,'xyz','true'";
        $result = $this->dataCompare->readDataFromFile('data3.php');
        $this->assertTrue($result);
        $this->assertEquals($expected, $this->dataCompare->data);
    }
}
