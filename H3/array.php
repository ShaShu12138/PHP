<?php
	$a = array(1,5,66,'truus');
	echo $a[0].'<br>';
	echo $a[2].'<br>';
//-------//
    $b = array(); //Dit is niet eens nodig!
    $b['vrouw'] = 'truus';
    $b['leeftijd'] = 67;
    $b['gewicht'] = 64;

    echo $b['leeftijd'].'<br>';  //67 wordt geprint
//-------//
    $alle["leeftijd"] = 12;
    $alle["naam"] = "Jan";
    $alle["telefoon"] = "0612994354";


    foreach ($alle as $label => $waarde) {
        echo "de ".$label." is: ".$waarde."<br>";
    }
//-------//   
