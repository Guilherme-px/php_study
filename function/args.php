<div class="title">Arguments and returns</div>

<?php

function getMessage() {
    return 'Welcome!';
}

getMessage();
$msg = getMessage();

echo $msg;

function getMessageWithName($name) {
    return "Welcome! {$name}";
}

echo '<br>', getMessageWithName('Guilherme');

function sum($a, $b) {
    return $a + $b;
}

echo '<br>', sum(5, 16);
$x = 9;
$y = 52;
echo '<br>', sum($x, $y);