<?php

include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/day4.txt");

$answer_part1 = 0;

foreach ($arr_payload as $value) {

    $separator = explode(":", $value);

    $card_nb = substr(str_replace(" ", "", trim($separator[0])), 4);

    list($part1, $part2) = explode("|", trim($separator[1]));

    $arr_part1 = explode(" ", $part1);
    $arr_part2 = explode(" ", $part2);

    $multi  = 2;


    $first_match = true;
    $points = 0;

    foreach (array_filter($arr_part1) as $value) {
        if (in_array($value, $arr_part2)) {
            if($first_match){
                $points += 1;
               
                $first_match = false;
            }else {
                $points *= $multi;
            }
        }
    }
    $answer_part1 += $points;
 

}

echo '<pre> ';
var_dump($answer_part1);
echo '</pre>';

