<div class="title">Foreach</div>

<?php
$arr = [
    1 => 'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'
];

foreach ($arr as $value) {
    echo "$value <br>";
}

foreach ($arr as $index => $value) {
    echo "$index => $value <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matrix as $row) {
    foreach($row as $value) {
        echo "$value";
    }
    echo '<br>';
}

$numbers = [1, 2, 3, 4, 5];
foreach($numbers as &$double) {
    $double *= 2;
    echo "$double <br>";
}