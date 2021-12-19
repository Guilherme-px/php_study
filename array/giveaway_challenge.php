<div class="tit">Giveaway challenge</div>

<?php
$names = ["Pikachu", "Naruto", "Spider man", "Kratos"];

$index = array_rand($names);
print_r("{$index}. $names[$index]");