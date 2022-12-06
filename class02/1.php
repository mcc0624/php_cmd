<?php
highlight_file(__FILE__);
error_reporting(0);
if(isset($_GET['cmd'])){
    $c = $_GET['cmd'];
    if(!preg_match("/exec|system|passthru|popen|proc_open|\`/i", $c)){
        eval($c);
    }
    else{
        echo "你是黑客么？";
    }
}

