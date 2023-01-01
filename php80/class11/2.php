<?php
if(isset($_GET['command'])){
    $command = $_GET['command'];
    if(strlen($command)>5){
        die("Too Long!");
    }
    if(preg_match("/[A-Za-z0-9]+/",$command)){
        die("No letters or numbers!");
    }
    eval(system("echo you are not able to get flag;$command 2>&1"));
}else{
    highlight_file(__FILE__);
}
?>