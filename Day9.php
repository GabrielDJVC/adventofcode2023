<?php

include_once("Utilities/Utilities.php");
set_time_limit(5);

$arr_payload = openFile("Files/day9.txt");

$answer1 = 0;
$answer2 = 0;

foreach ($arr_payload as $value) {
    
    $arr_values_to_add = [];
    $arr_value = array_map('intval', explode(" ", $value));

    $arr_values_to_add[] = $arr_value;
    $result = findSuite($arr_value, $arr_values_to_add);

    $value_added = addNumber(array_reverse($result));

    $value_added_reverse = addNumberReverse(array_reverse($result));
    exit;
}


function findSuite($array, $array2)
{
    $arr_result = [];

    if (empty(array_filter($array))) {
        // breakpoint
        return $array2;
    }

    for ($i = 0; $i < count($array) - 1; $i++) {
        $arr_result[] = $array[$i + 1] - $array[$i];
    }

    $array2[] = $arr_result;

    //echo "String : " . implode(" ", $arr_result) . "<br />";

    return findSuite($arr_result, $array2);
}

function addNumber($array)
{
    global $answer1;
    $last_key = count($array) - 1;

    $nb_values_of_first_array = count($array[$last_key]);

    if ($nb_values_of_first_array < ($nb_values_of_first_array + 1)) {
        for ($i = 0; $i < count($array); $i++) {
            if ($i != 0) {

                $last_index_n = count($array[$i]) - 1;
                $last_index_n_before = count($array[$i - 1]) - 1;

                $array[$i][] = $array[$i][$last_index_n] + $array[$i - 1][$last_index_n_before] ;
            }
            $array[0][] = 0;
        }
    }
    $last_index_of_last_array = count($array[$last_key]) -1 ;
    $answer1 += $array[$last_key][$last_index_of_last_array];

}


function addNumberReverse($array)
{
    global $answer2;

    for ($i = 0; $i < count($array); $i++) {

        if ($i != 0) {
            
            array_unshift($array[$i],7);
        }
        $array[0][] = 0;
        echo "String $i: " . implode(" ", $array[$i]) . "<br />";

    }
}

echo '<pre> <strong>Partie 1</strong> : ' . $answer1 . '</pre> ';