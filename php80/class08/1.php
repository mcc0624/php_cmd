<?php
error_reporting(0);
function check($x){
    if(preg_match('/\\$|\!|\@|\#|\%|\^|\&|\*|\?|\>|\<|nc|wget|exec|bash|sh|netcat|grep|base64|rev|curl|wget|gcc|python|pingtouch|mv|mkdir|cp/i', $x)){
        die('too young too simple sometimes naive!');
    }
}
if(isset($_GET['cmd'])){
    $cmd=$_GET['cmd'];
    check($cmd);
    exec($cmd);
}
else{
    highlight_file(__FILE__);
}
?>