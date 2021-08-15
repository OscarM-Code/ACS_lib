<?php

function fn_count($array){

    $i=0;
    while ($array[$i] != "") {
        $i++;
    }

    return $i;

}

echo(fn_count(["b", "r", "u", "h"]));

?>