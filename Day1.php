<?php

include_once("Utilities/Utilities.php");


$arra_payload = openFile("Files/file_day_1.txt");

$int_total = 0;
$str_numeric_value = "";
$str_nouvelle_chaine = "";

foreach ($arra_payload as $key => $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        if (is_numeric($value[$i])) {
            $str_numeric_value .= $value[$i];  
        }
       
    }
    if (strlen($str_numeric_value) == 1) {
        $str_numeric_value = $str_numeric_value . $str_numeric_value;   
    }
    $str_nouvelle_chaine = $str_numeric_value[0] . $str_numeric_value[-1];
    $int_total += (int)$str_nouvelle_chaine ;
    $str_numeric_value = "";
}

echo '<pre> valeur totale';
var_dump($int_total);
echo '</pre>'; 

