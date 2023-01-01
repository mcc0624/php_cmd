<?php
highlight_file(__FILE__);
error_reporting(0);
if(isset($_GET['c'])) {
    $c = $_GET['c'];
    if (!preg_match("/more|less|head|cat|tac|tail|nl|od|vi|vim|sort|uniq|file|\'/i", $c)) {
        eval($c);
    } else {
        echo "黑的啥都看不见了！";
    }
}