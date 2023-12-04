<?php

include_once("Utilities/Utilities.php");


$arra_payload = openFile("Files/file_day_2.txt");


$arra_new = explode(":", $value);
$total_value = 0;

foreach ($arra_payload as $key => $value) {


    $arra_new = explode(":", $value);
    $game = trim($arra_new[0]);
    $arra_colors = explode(";", trim($arra_new[1]));

    $arra_final = [$game => []];

    $arra_val_to_compare = [
        'red'   => 12,
        'green' => 13,
        'blue' =>  14,
    ];
    $color_not_gt = true;
    foreach ($arra_colors as $value) {
        $colors = explode(',', $value);
        foreach ($colors as $color) {
            $arra_colors = explode(" ", trim($color));
            $color_number = $arra_colors[0];
            $color_name = $arra_colors[1];

            $arra_final[$game][$color_name][] = $color_number;
        }
    }


    foreach ($arra_val_to_compare as $key => $value) {
        $color_max = max($arra_final[$game][$key]);

        if ($color_max > $value) {
            $color_not_gt = false;
            break;
        }
    }
    if ($color_not_gt) {
        $total_value += (int)substr($game, 4, strlen($game));
    }
}
echo '<pre>';
var_dump($total_value);
echo '</pre>';

/* echo '<pre>';
var_dump($arra_final);
echo '</pre>'; */
// 12 red cubes, 13 green cubes, and 14 blue cubes
