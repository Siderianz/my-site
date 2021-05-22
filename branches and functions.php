<?php

$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0xA, 0xB, 0xC, 0xD, 0xE, 0xF);
$newString = "";
foreach ($arr as $value) {
    $newString = "{$newString} {$value}";
}
$newString = trim($newString);
$newString = "\"{$newString}\"";
echo $newString;