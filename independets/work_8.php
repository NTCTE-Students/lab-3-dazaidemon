<?php
$red = [1, 2, 3, 4, 5, 6, 7];
$pop = sort($red);
echo "вот список во возрастании:\n";
print_r($red);
$pop2 = rsort($red);
echo "вот список в убывание:\n"; 
print_r($red);