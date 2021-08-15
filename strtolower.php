<?php


function fn_strtolower ($str){

    $newstr = "";

    for ($i = 0; $i < strlen($str); $i++) {

        $charnum = ord($str[$i]);
        if ($charnum > 64 && $charnum < 91) {
            $newstr = $newstr . chr($charnum + 32);
        } else {
            $newstr = $newstr . $str[$i];
        }
    }
    
    return $newstr;
}

echo(fn_strToLower('BrUh'));

?>