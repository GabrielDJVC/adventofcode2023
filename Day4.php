<?php

include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/day4.txt");

$answer_part1 = 0;
$answer_part2 = 0;

$arr_nb_of_new_cards = [];
foreach ($arr_payload as $value) {

    $separator = explode(":", $value);

    $card_nb = substr(str_replace(" ", "", trim($separator[0])), 4);

    list($part1, $part2) = explode("|", trim($separator[1]));

    $arr_part1 = explode(" ", $part1);
    $arr_part2 = explode(" ", $part2);

    $multi  = 2;

    $first_match = true;
    $points = 0;

    $arr_matching_numbers = [];

    foreach (array_filter($arr_part1) as $value) {
        if (in_array($value, $arr_part2)) {
            if ($first_match) {
                $points += 1;

                $first_match = false;
            } else {
                $points *= $multi;
            }
            $arr_matching_numbers[] = $value;
        }
    }
    for ($i=1; $i <= sizeof($arr_matching_numbers); $i++) { 
         $val += 1;
        $arr_nb_of_new_cards[$card_nb + $i] += 1;
    }
   
    $answer_part1 += $points;
}

echo '<pre> : ';
var_dump($arr_nb_of_new_cards);
echo '</pre>';

$answer_part2 = array_sum($arr_nb_of_new_cards);

echo '<pre> <strong>Partie 1</strong> : ' . $answer_part1 . '</pre> ';
echo '<pre> <strong>Partie 2</strong> : ' . $answer_part2 . '</pre> ';


/* 
echo '<pre> partie 1 : ';
var_dump($answer_part1);
echo '</pre>';
 */
