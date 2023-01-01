<?php
header("content-type:text/html;charset=utf-8");
highlight_file(__FILE__);
error_reporting(0);
$cmd = $_GET["cmd"];
if(isset($cmd)){
    $cmd = preg_replace("# #","",$cmd);
    echo "过滤后的命令：".$cmd."</br >";
    echo "命令执行结果如下：";
    system($cmd);
}
?>

