<?php
highlight_file(__FILE__);
$cmd=$_GET['cmd'];
pcntl_exec("/bin/bash",array("-c",$cmd));
?>