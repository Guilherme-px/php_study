<div class="title">Returning a function</div>

<?php
function sum($a)
{
    return function ($b) use ($a) {
        return $a + $b; // 3s
    };
}

echo sum(13)(3);

$twoMore = sum(2);
echo '<br>', $twoMore(10);
echo '<br>', $twoMore(18);
