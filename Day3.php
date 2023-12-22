<?php

include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/file_day_3.txt");

$arr_nb_to_add_or_not = [[]];

$int_answer = 0;
$string = "";
foreach ($arr_payload as $value) {
    $arr_add = [];

    for ($i = 0; $i < strlen($value); $i++) {
        if(is_numeric($value[$i])){
            $arr_nb_to_add_or_not[$i] = [$i => $value[$i]];
            continue;
        }
        $arr_nb_to_add_or_not[] = $string;
        
    }
    echo '<pre> ';
    var_dump($arr_nb_to_add_or_not);
    echo '</pre>';

    exit;
}
echo '<pre> ';
var_dump($int_answer);
echo '</pre>';

