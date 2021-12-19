<div class="title">Using types</div>

<?php
function sum1($a, $b)
{
    echo "<span>Sum $a + $b = </span>";
    return $a + $b;
}

echo sum1(1, 2) . '<br>';
echo sum1(1.7, 2.5) . '<br>';
echo sum1(1, '4two') . '<br>';

function sum2(int $a, int $b)
{
    echo "<span>Sum $a + $b = </span>";
    return $a + $b;
}

echo sum2(1, 2) . '<br>';
echo sum2(1.7, 2.5) . '<br>';
// echo sum2(1, '4dois') . '<br>'; error

function sum3($a, float $b): int
{
    echo "<span>Sum $a + $b = </span>";
    return $a + $b;
}

echo sum3(1, 2) . '<br>';
echo sum3(1.7, 2.5) . '<br>';
// echo sum3(1, '4dois') . '<br>'; error
