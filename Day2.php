<?php

include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/file_day_2.txt");


$$answer = 0;
$set_power = 1;
$answer_2 = 0;

$arr_val_to_compare = [
    'red'   => 12,
    'green' => 13,
    'blue' =>  14,
];

foreach ($arr_payload as $key => $value) {
    $arr_new = explode(":", $value);
    $game = trim($arr_new[0]);
    $arr_colors = explode(";", trim($arr_new[1]));

    $arr_final = [$game => []];

    $color_not_gt = true;
    foreach ($arr_colors as $value) {
        $colors = explode(',', $value);
        foreach ($colors as $color) {
            list($color_number, $color_name) = explode(" ", trim($color));
            
            $arr_final[$game][$color_name][] = $color_number;
        }
    }

    foreach ($arr_val_to_compare as $key => $value) {
        $color_max = max($arr_final[$game][$key]);

        if ($color_max > $value) {
            $set_power = $color_max * $set_power;
            $color_not_gt = false;
            break;
        }
        $set_power = $color_max * $set_power;
    }

    if ($color_not_gt) {
        $answer += (int)substr($game, 4);
    }

    $set_power = 1;
    foreach ($arr_val_to_compare as $key => $value) {
        $color_max = max($arr_final[$game][$key]);
        $set_power = $color_max * $set_power;
    }

    $answer_2 += $set_power;
}


echo '<pre> Day 2.1 : ';
var_dump($answer);
echo '</pre>';

echo '<pre> Day 2.2 : ';
var_dump($answer_2);
echo '</pre>';

