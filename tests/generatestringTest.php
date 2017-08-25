<?php
namespace graychen\Test;

use graychen\generatestring;

class generatestringTest extends \PHPUnit_Framework_TestCase
{
    private $string;

    public function setUp()
    {
        $this->string=new generatestring();
    }
    public function testGetchars()
    {
        $result = $this->string->getchars("a", 10);
        $this->assertEquals('aaaaaaaaaa', $result);
    }

    public function testGetchars_t()
    {
        $result = $this->string->getchars_t("abc", 10);
        $this->assertEquals('abcabcabcabcabcabcabcabcabcabc', $result);
    }

    public function testGetchars_p()
    {
        $result = $this->string->getchars_p("abc", 10);
        $this->assertEquals('abcabcabcabcabcabcabcabcabcabc', $result);
    }

    public function testGetcharscmp()
    {
        $result = $this->string->getcharscmp("abc", 10);
        $this->assertEquals('abcabcabca', $result);
    }

    public function testGetchars_s()
    {
        $result = $this->string->getchars_s("abc", 10);
        $this->assertEquals('abcabcabcabcabcabcabcabcabcabc', $result);
    }
}
