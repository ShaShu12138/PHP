<?php
echo Fahrenheit(18);


function Fahrenheit($Celsius){
    $Fahrenheit = $Celsius*1.8+32;
    return $Fahrenheit;
}