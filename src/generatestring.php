<?php
namespace graychen;

/**
 * * @brief 字符生成器
 * * author Graychen
 *  */
class generatestring
{
    //二倍迭代拼接
    public function getchars($char, $length)
    {
        $binchars = decbin($length);
        $binchars_arr = str_split($binchars);
        $ret="";
        $char=$char;
        for ($i=strlen($binchars)-1;$i>=0;$i--) {
            $binchars_arr[$i]=="1" && $ret=$ret.$char;
            $char=$char.$char;
        }
        return $ret;
    }

    //三倍迭代拼接
    public function getchars_t($char, $length)
    {
        $binchars = base_convert($length, 10, 3);
        $binchars_arr = str_split($binchars);
        $ret="";
        $char=$char;
        for ($i=strlen($binchars)-1;$i>=0;$i--) {
            $binchars_arr[$i]=="1" && $ret=$ret.$char;
            $binchars_arr[$i]=="2" && $ret=$ret.$char.$char;
            $char=$char.$char.$char;
        }
        return $ret;
    }

    //php函数str_repeat
    public function getchars_p($char, $length)
    {
        return str_repeat($char, $length);
    }

    //php函数，间接运算
    public function getcharscmp($chars, $length)
    {
        $char="`123~!@#";
        return substr(str_pad($char, strlen($char)+$length, $chars), strlen($char));
    }

    //php函数，字符串格式化
    public function getchars_s($char, $length)
    {
        $a = sprintf("%".$length."s", " ");
        $a = str_replace(" ", $char, $a);
        return $a;
    }
}
