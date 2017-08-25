# this is a library for generate string
[![Latest Stable Version](https://poser.pugx.org/graychen/generatestring/version)](https://packagist.org/packages/graychen/generatestring)
[![Total Downloads](https://poser.pugx.org/graychen/generatestring/downloads)](https://packagist.org/packages/graychen/generatestring)
[![License](https://poser.pugx.org/graychen/generatestring/license)](https://packagist.org/packages/graychen/generatestring)
[![StyleCI](https://styleci.io/repos/92368125/shield?branch=master)](https://styleci.io/repos/92368125)
[![Build Status](https://travis-ci.org/Graychen/yii2-post.svg?branch=master)](https://travis-ci.org/Graychen/yii2-post)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Graychen/generatestring/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Graychen/generatestring/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Graychen/generatestring/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Graychen/generatestring/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Graychen/generatestring/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Graychen/generatestring/build-status/master)



## how to use
``` php
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

```