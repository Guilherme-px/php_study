<div class="title">Variables</div>

<?php
$numberA = 13;
echo $numberA, '<br>';
var_dump($numberA);

echo '<br>';
$a = 3;
$b = 16;
$sum = $a + $b;
echo $sum;

echo '<br>';
echo isset($sum);

unset($sum);
echo '<br>';
var_dump($sum);

$var = 10;
echo '<br>' . $var;

$var = "now i'm a string";
echo '<br>' . $var;