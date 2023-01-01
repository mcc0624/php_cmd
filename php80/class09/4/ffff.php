<?php
highlight_file(__FILE__);
error_reporting(E_ALL);
function filter($argv){
    str_replace("/\?|/","=====",$argv);
    return $argv;
}
if (isset($_GET['cmd']) && strlen($_GET['cmd']) <= 4) {
    exec(filter($_GET['cmd']));
} else  {
    echo "flag in local path flag file!";
}
