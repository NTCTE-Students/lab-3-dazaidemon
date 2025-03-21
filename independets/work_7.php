<?php
function splitStringToArray($bage) {
    $wordsArray = explode(' ', $bage);
    return $wordsArray;
}
$bage = ";жил да был один маленький человек .";
$wordsArray = splitStringToArray($bage);
echo "Массив слов:\n";
print_r($wordsArray);
?>