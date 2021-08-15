<?php

function fn_strcmp ($str, $str1){

    if(strlen($str) == strlen($str1)){
        for($i=0; $i < strlen($str); $i++){
                if ($str[$i] == $str1[$i]){
                    $result = 0;
                } else if ($str[$i] !== $str1[$i]){
                    $result = 1;
                }
        }
    } else{
        $result = strlen($str)-strlen($str1);
    }
    

    return $result;

}

echo(fn_strcmp('Bruh', 'bruh'));

?>