<?php
header("content-type:text/html;charset=utf-8");
highlight_file(__FILE__);
error_reporting(0);
if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    if (!preg_match("/flag|php|cat|sort|shell|\'/i", $cmd)) {
        eval($cmd);
    }
    else{
        echo "再来黑我丫！！！";
    }
}