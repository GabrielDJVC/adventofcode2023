<?php

function openFile($pFile)
{
    $file = fopen($pFile, "r");
    $arra_lines = [];
    while (($ligne = fgets($file)) != false) {
        $arra_lines[] = $ligne;
    }
   
    return $arra_lines;
}

//openFile("Files/file_day_1.txt");
