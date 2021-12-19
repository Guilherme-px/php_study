<div class="title">Comparison</div>

<?php
$arr1 = ['name' => 'Maria', 'age' => 20];
$arr2 = ['name' => 'Maria', 'age' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

echo '<br>';

$arr3 = ['age' => 20, 'name' => 'Maria' ];
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';

$arr4 = ['age' => '20', 'name' => 'Maria' ];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);