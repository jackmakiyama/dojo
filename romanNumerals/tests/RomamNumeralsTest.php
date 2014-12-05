<?php

require_once dirname(__FILE__).'/../src/RomanNumerals.php';

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    protected $numerals;

    public function setup()
    {
        $this->numerals = new RomanNumerals();
    }

    public function testConvert1toI()
    {
        $this->assertEquals('I', $this->numerals->toRoman(1));
    }

    public function testConvert2ToII()
    {
        $this->assertEquals('II', $this->numerals->toRoman(2));
    }

    public function testConvert3ToIII()
    {
        $this->assertEquals('III', $this->numerals->toRoman(3));
    }

    public function testConvertIto1()
    {
        $this->assertEquals(1, $this->numerals->toArabic('I'));
    }

    public function testConvert10ToX()
    {
        $this->assertEquals('X', $this->numerals->toRoman(10));
    }

    public function testConvertXXXTo30()
    {
        $this->assertEquals(30, $this->numerals->toArabic('XXX'));
    }

    public function testConvertVITo6()
    {
        $this->assertEquals(6, $this->numerals->toArabic('VI'));
    }

    public function testConvertIVTo4()
    {
        $this->assertEquals(4, $this->numerals->toArabic('IV'));
    }

    public function testConvertXIXTo19()
    {
        $this->assertEquals(19, $this->numerals->toArabic('XIX'));
    }

    public function testConvertTo19()
    {
        $this->assertEquals(19, $this->numerals->toArabic('XIX'));
    }
}
