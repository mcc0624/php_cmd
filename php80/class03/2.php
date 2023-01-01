<?php
highlight_file(__FILE__);
error_reporting(0);
$cmd = $_GET["cmd"];
$cmd = $cmd." >/dev/null 2>&1";
if(isset($cmd)){
    system($cmd);
}
?>