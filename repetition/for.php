<div class="title">For</div>

<?php
for($count = 1; $count <= 5; $count++) {
    echo "$count <br>";
}

for(; $count <= 10; $count++) {
    echo "$count <br>";
}

for(; $count <= 15; ) {
    echo "$count <br>";
    $count++;
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo '<br>';
}