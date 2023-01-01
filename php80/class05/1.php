<?php
header("content-type:text/html;charset=utf-8");
highlight_file(__FILE__);
error_reporting(0);
if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    if (!preg_match("/flag|system|php/i", $cmd)) {
        eval($cmd);
    }
    else{
        echo "命令有问题哦，来黑我丫！！！";
        }
}
