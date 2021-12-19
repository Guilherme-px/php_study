<div class="title">Recursion</div>

<?php
function sumOneUntil($number)
{
    $sum = 0;
    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo sumOneUntil(150) . '<br>';

function recursiveSumOneUp($number)
{
    if ($number === 1) {
        return 1;
    } else {
        return $number + recursiveSumOneUp($number - 1);
    }
}

echo recursiveSumOneUp(150) . '<br>';

function economicRecursiveSum($number)
{
    return $number === 1 ? 1 : $number + economicRecursiveSum($number - 1);
}

echo economicRecursiveSum(150) . '<br>';
