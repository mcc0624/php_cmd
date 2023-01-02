<?php
highlight_file(__FILE__);
error_reporting(0);
if(!preg_match('/[a-z0-9_$]/is',$_GET['cmd'])) {
    eval($_GET['cmd']);
}