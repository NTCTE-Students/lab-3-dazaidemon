<?php
$array = ['яблоко', 'banana', 'cherry', 'date', 'elderberry'];
$searchElement = 'cherry';
$index = array_search($searchElement, $array);

if ($index !== false) {
    echo "Элемент '$searchElement' найден по индексу: $index\n";
} else {
    echo "Элемент '$searchElement' не найден в массиве.\n";
}
?>