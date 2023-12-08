<?php

include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/file_day_3.txt");

$arr_nb_to_add_or_not = [];

$int_answer = 0;
foreach ($arr_payload as $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        if (is_numeric($value[$i])) {
            $arr_nb_to_add_or_not[$i] = $value[$i];

            continue;
        }
        foreach ($arr_nb_to_add_or_not as $index => $nb) {
            if ($value[$index] != "." ||  !is_numeric($value[$index])) {
                $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                $arr_nb_to_add_or_not = [];
                break;

                if ($value[$index] != "." ||  !is_numeric($value[$index])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;

                }
                elseif (next($arr_payload)[$index + 1] != "." ||  !is_numeric(next($arr_payload)[$index+1])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;

                }
                elseif (next($arr_payload)[$index-1] != "." ||  !is_numeric(next($arr_payload)[$index-1])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;

                }
                elseif (next($arr_payload)[$index+1] != "." ||  !is_numeric(next($arr_payload)[$index + 1])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;

                }
                elseif (next($arr_payload)[$index - 1] != "." ||  !is_numeric(next($arr_payload)[$index - 1])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;

                }
                elseif (prev($arr_payload)[$index - 1] != "." || !is_numeric(prev($arr_payload)[$index - 1])) {
                    $int_answer += (int)implode('', $arr_nb_to_add_or_not);

                    $arr_nb_to_add_or_not = [];
                    break;
                }
            }
        }
    }
}
echo '<pre> ';
var_dump($int_answer);
echo '</pre>';

