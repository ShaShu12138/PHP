<?php

echo deeldoor3(21645);

function deeldoor3 ($number){
    $TF = $number%3;
    if($TF==0){
        return 'waar';
    }else{
        return 'niet waar';
    }

}