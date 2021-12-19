<div class="title">While / Do while</div>

<?php
const LIMIT_VALUE = 5;
$count = 10;

while ($count < LIMIT_VALUE); {
    echo "while $count <br>";
    $count++;
}

$count = 100;

do {
    echo "do-while $count <br>";
    $count++;
} while($count < LIMIT_VALUE);