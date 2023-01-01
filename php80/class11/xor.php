<?php
header("content-type:text/html;charset=utf-8");
highlight_file(__FILE__);
error_reporting(0);
$shell = $_GET["cmd"];
$result1 = "";
$result2 = "";

function judge($c)
{
    if(!preg_match('/[a-z0-9]/is',$c))
    {
        return true;
    }
    return false;
}

for($num=0;$num<=strlen($shell);$num++)
{
    for($x=33;$x<=126;$x++)
    {
        if(judge(chr($x)))
        {
            for($y=33;$y<=126;$y++)
            {
                if(judge(chr($y)))
                {
                    $f = chr($x)^chr($y);
                    if($f == $shell[$num])
                    {
                        $result1 .= chr($x);
                        $result2 .= chr($y);
                        break 2;
                    }
                }
            }
        }
    }
}
echo "异或运算第一部分： ".$result1;
echo "<br>";
echo "异或运算第二部分： ".$result2;
