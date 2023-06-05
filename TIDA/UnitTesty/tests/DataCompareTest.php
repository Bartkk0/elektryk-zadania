<?php

require_once 'LibCss.php';

use PHPUnit\Framework\TestCase;

class DataCompareTest extends TestCase
{
    public function SetUp(): void
    {
        $this->libCss = new LibCss();
    }

    public function testJs1()
    {
        $expected = '<script src="nieistnieje-skrypt.js"></script>';
        $result = $this->libCss->loadLib('nieistnieje-skrypt.js', 'script', '');
        $this->assertEquals($expected, $result);
    }

    public function testJs2()
    {
        $expected = '<script src="skrypt.js"></script>';
        $result = $this->libCss->loadLib('skrypt.js', 'script', '');
        $this->assertEquals($expected, $result);
    }

    public function testJs3()
    {
        $expected = '<script src="skrypt.js?v=123"></script>';
        $result = $this->libCss->loadLib('skrypt.js', 'script', '123');
        $this->assertEquals($expected, $result);
    }

    public function testCss1()
    {
        $expected = '<link rel="stylesheet" href="nieistnieje-arkusz.css" />';
        $result = $this->libCss->loadLib('nieistnieje-arkusz.css', 'css', '');
        $this->assertEquals($expected, $result);
    }

    public function testCss2()
    {
        $expected = '<link rel="stylesheet" href="arkusz.css" />';
        $result = $this->libCss->loadLib('arkusz.css', 'css', '');
        $this->assertEquals($expected, $result);
    }

    public function testCss3()
    {
        $expected = '<link rel="stylesheet" href="arkusz.css?v=123" />';
        $result = $this->libCss->loadLib('arkusz.css', 'css', '123');
        $this->assertEquals($expected, $result);
    }


}
