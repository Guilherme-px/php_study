<div class="title">Switch</div>

<?php
$category = 'luxe';
$price = 0.0;
$car = '';

if($category === 'luxe') {
    $car = 'Mercedes';
    $price = 250000;
} else if($category === 'SUV') {
    $car = 'Renegade';
    $price = 80000;
} else {
    $car = 'Mobi';
    $price = 32000;
}

$priceFormat = number_format($price, 2, ',', '.');
echo "<p>Car: $car<br>Price: R$ $priceFormat</p>";

$category = 'SUV';
switch (strtolower($category)) {
    case 'luxe': {
            $car = 'Mercedes';
            $price = 250000;
            break;
    }
    case 'suv';
    case 'basic suv': {
            $car = 'Renegade';
            $price = 80000;
            break;
    }
    case 'sedan':
        $car = 'Etios';
        $price = 55000;
        break;
    default:
        $car = 'Mobi';
        $price = 33000;
}

$priceFormat = number_format($price, 2, ',', '.');
echo "<p>Car: $car<br>Price: R$ $priceFormat</p>";