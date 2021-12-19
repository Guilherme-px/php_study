<div class="title">Variable arguments</div>

<?php

function sum($a, $b) {
    return $a + $b;
}

echo sum(15, 14) . '<br>';
echo sum(15, 14, 3) . '<br>';

function fullSum(...$nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

echo fullSum(1, 2, 3, 4, 5);