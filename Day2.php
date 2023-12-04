<?php

include_once("Utilities/Utilities.php");


$arra_payload = openFile("Files/file_day_2.txt");


$arra_new = explode(":", $value);

foreach ($arra_payload as $key => $value) {

    //$str_new = str_replace(" ", "", $value);

    $arra_new = explode(":", $value);
    $game = trim($arra_new[0]);
    $arra_colors = explode(";", trim($arra_new[1]));

    $arra_final = [$game => []];
  
    foreach ($arra_colors as $value) {
        $colors = explode(',', $value);
        foreach($colors as $color){
            $arra_colors = explode(" ", trim($color));
            $color_number = $arra_colors[0];
            $color_name = $arra_colors[1];
            
            
            $arra_final[$game][$color_name][] = $color_number;
        }
    }

    echo '<pre>';
    var_dump($arra_final);
    echo '</pre>';
    exit;
}



$possible = [
    'red' => 12,
    'green' => 13,
    'blue' => 14
];

