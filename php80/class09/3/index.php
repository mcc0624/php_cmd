<?php
highlight_file(__FILE__);
error_reporting(E_ALL);
function filter($argv){
    $a = str_replace("/\*|\?|/","=====",$argv);
    return $a;
}
if (isset($_GET['cmd']) && strlen($_GET['cmd']) <= 5) {
    exec(filter($_GET['cmd']));
} else  {
    echo "flag in local path flag file!";
}
