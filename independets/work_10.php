<?php
$table = [
    ['Имя', 'Возраст', 'Город'],
    ['Алексей', 25, 'Москва'],
    ['Мария', 30, 'Санкт-Петербург'],
    ['Иван', 22, 'Новосибирск'],
    ['Елена', 35, 'Екатеринбург']
];
echo "<table border='1' cellpadding='5'>";
echo "<tr>";
foreach ($table[0] as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";
for ($i = 1; $i < count($table); $i++) {
    echo "<tr>";
    foreach ($table[$i] as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>