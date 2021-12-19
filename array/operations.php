<div class="title">Operations</div>

<?php
$data1 = [
    "name" => "John",
    "age" => 22
];

$data2 = [
    "nationality" => "Sidney"
];

$completeData = $data1 + $data2;
print_r($completeData);

echo '<br>' . is_array($completeData);
echo '<br>' . count($completeData);

echo '<br>';
$index = array_rand($completeData);
echo "$index = $completeData[$index]";
echo '<br>';
echo "{$completeData['age']}";

unset($completeData["age"]);
echo '<br>';
print_r($completeData);

unset($completeData);
echo '<br>';
print_r($completeData);
var_dump($completeData);