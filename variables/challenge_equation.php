<div class="title">Challenge equation</div>

<?php

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$opA = $numA / $denA;
$opB = ($numB / $denB) ** 2;
$opC = ($opA - $opB) ** 3;

$opD = 10 ** 3;

$result = $opC / $opD;
echo $result;