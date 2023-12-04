<?php

function openFile($pFile)
{
    $file = fopen($pFile, "r");

    $i = 0;
    $arra_lines = [];
    while (($ligne = fgets($file)) != false) {
        $arra_lines[$i] = $ligne;
        $i++;
    }
    /* echo '<pre>';
    var_dump($arra_lines);
    echo '</pre>'; */
    return $arra_lines;
}

//openFile("Files/file_day_1.txt");
