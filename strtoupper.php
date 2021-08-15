<?php


function fn_strtoupper ($str){

    $newstr = "";

    for ($i = 0; $i < strlen($str); $i++) {

        $charnum = ord($str[$i]);
        if ($charnum > 96 && $charnum < 123) {
            $newstr = $newstr . chr($charnum - 32);
        } else {
            $newstr = $newstr . $str[$i];
        }
    }
    
    return $newstr;
}

echo(fn_strToUpper('Salut mecz'));

?>