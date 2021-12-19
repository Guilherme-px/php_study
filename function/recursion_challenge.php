<div class="title">Recursion challenge</div>

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function printArray($array, $level = '>')
{
    foreach ($array as $el) {
        if (is_array($el)) {
            printArray($el, $level . $level[0]);
        } else {
            echo "$level $el<br>";
        }
    }
}

printArray($array);
printArray($array, '.');
