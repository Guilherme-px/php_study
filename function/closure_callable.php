<div class="title">Closure & Callable</div>

<?php

$sum1 = function ($a, $b) {
    return $a + $b;
};

echo $sum1(2, 3) . '<br>';
echo (is_callable($sum1) ? 'Yes' : 'No') . '<br>';

function run1($a, $b, $op, callable $function)
{
    $result = $function($a, $b) ?? 'nothing';
    echo "$a $op $b = $result<br>";
}

echo '<br>';
run1(2, 3, '+', $sum1);

function run2($a, $b, $op, Closure $function)
{
    $result = $function($a, $b) ?? 'nothing';
    echo "$a $op $b = $result<br>";
}

echo '<br>';
run2(100, 100, '+', $sum1);
