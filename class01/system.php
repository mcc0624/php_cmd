<?php
highlight_file(__FILE__);
$cmd = $_GET["benben"];
if(isset($cmd)){
    system($cmd);
}
?>