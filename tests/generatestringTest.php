<?php
namespace graychen\Test;
use graychen\generatestring;
class generatestringTest extends PHPUnit_Framework_TestCase
{
    public function testGenerateOneWord()
    {
        $a = new generatestring();
        $result = $a->getchars("a",100);
        $this->expectOutputString($result);
    }
}
