<div class="title">Constant</div>

<?php
const FRUITS = ['Orange', 'Pineapple'];
// FRUITS[0] = 'banana';
// FRUITS[] = 'banana';
echo FRUITS[0];

const CARS = ['Fiat' => "Uno", "Ford" => "Fiesta"];
// CARS["BMW"] = '325i';
echo '<br>' . CARS["Fiat"];

define('CITIES', array('Recife', 'Manaus'));
echo '<br>' . CITIES[1];