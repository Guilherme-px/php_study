<div class="title">Anonymous functions</div>

<?php
$sum = function ($a, $b) {
    return $a + $b;
};

echo $sum(1, 2) . '<br>';

function run($a, $b, $op, $function)
{
    $result = $function($a, $b) ?? 'nothing';
    echo "$a $op $b = $result<br>";
}

run(2, 3, '+', $sum);

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

run(2, 3, '*', $multiplicacao);
