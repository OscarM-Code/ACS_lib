<?php

function fn_strstr($str, $arg, $trueorfalse){

    $i = 0;
    $newstr = "";

    if($trueorfalse = "true"){
        while($str[$i] != $arg){
            $newstr = $newstr . $str[$i];
            $i++;
        }
    } else if($trueorfalse = "false") {
        while($str[$i] != ""){
            $newstr = $newstr . $str[$i];
            if($str[$i] = $arg){
                $newstr = "";
            }
            $i++;
        }
    }

    return $newstr;

}

echo(fn_strstr("bonjour", "j", "false"));

?>