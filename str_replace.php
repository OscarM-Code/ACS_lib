<?php

function fn_str_replace($str, $arg, $newarg){

    $newstr = "";

    for($i = 0; $i < strlen($str); $i++)
    {
        if($str[$i] != $arg)
        {
            $newstr = $newstr . $str[$i];
        } else {
            $newstr = $newstr . $newarg;
        }
    }

    return $newstr;
}

echo(fn_str_replace("pruh", "p", "b"));

?>>