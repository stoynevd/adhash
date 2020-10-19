<?php

function checkStrings($str1, $str2) {

    $str1Arr = str_split(str_replace(' ', '', strtolower($str1)));
    $str2Arr = str_split(str_replace(' ', '', strtolower($str2)));

    sort($str1Arr);
    sort($str2Arr);

    $sortedTextStr1 = implode('', $str1Arr);
    $sortedTextStr2 = implode('', $str2Arr);

    if ($sortedTextStr1 != $sortedTextStr2) {
        return 'false';
    }

    return 'true';
 }

echo checkStrings('eleven plus two', 'twelve plus one');
