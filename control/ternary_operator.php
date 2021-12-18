<div class="title">Ternary operator</div>

<?php
$age = 70;
$status;

if($age >= 18) {
    $status = "of legal age";
} else {
    $status = "minor";
}

echo "$status<br>";

$age = 17;
$status = $age >= 18 ? 'of legal age' : 'minor';
echo "$status<br>";