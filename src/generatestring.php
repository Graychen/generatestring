<?php
namespace graychen\generatestring;
/**
 * * @brief 字符生成器
 * * author Graychen
 *  */
class generatestring{
    //二倍迭代拼接 
    function getchars($c,$length){  
           $binchars = decbin($length);  
           $binchars_arr = str_split($binchars);  
           $ret="";  
           $char=$c;  
           for($i=strlen($binchars)-1;$i>=0;$i--){  
                          $binchars_arr[$i]=="1" && $ret=$ret.$char;  
                          $char=$char.$char;  
                   }  
           return $ret;  
    }  

    //三倍迭代拼接
    function getchars_t($c,$length){  
           $binchars = base_convert($length,10,3);  
           $binchars_arr = str_split($binchars);  
           $ret="";  
           $char=$c;  
           for($i=strlen($binchars)-1;$i>=0;$i--){  
                          $binchars_arr[$i]=="1" && $ret=$ret.$char;  
                          $binchars_arr[$i]=="2" && $ret=$ret.$char.$char;  
                          $char=$char.$char.$char;  
                   }  
           return $ret;  
    }  

    //php函数str_repeat
    function getchars_p($c,$length){  
           return str_repeat($c,$length);  
    } 

    //php函数，间接运算
    function getcharscmp($c,$length){  
           $char="`123~!@#";  
           return substr(str_pad($char,strlen($char)+$length,$c),strlen($char));  
    }  
    
    //php函数，字符串格式化
    function getchars_s($c,$length){  
           $a = sprintf("%".$length."s"," ");  
           $a = str_replace(" ",$c,$a);  
           return $a;  
    }  

}
