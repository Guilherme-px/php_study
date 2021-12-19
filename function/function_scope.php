<div class="title">Function and scope</div>

<?php
function printMsg() {
    echo "Hello! ";
    echo "to the next! <br>";
}

printMsg();

$var = 1;
function changeValue() {
    $var = 2;
    echo "during the function: $var <br>";
}

echo "before: $var <br>";
changeValue();
echo "after: $var <br>";

function changeTrueValue() {
    global $var;
    $var = 3;
    echo "during the function: $var <br>";
}

echo "before: $var <br>";
changeTrueValue();
echo "after: $var <br>";