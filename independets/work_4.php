<?php
$steam = ['pubg','cs','dmc','csgo','dmc','cs'];
$prap = array_unique($steam);
$prap = array_values($steam);
echo "список без повторение:\n";
print_r($prap);