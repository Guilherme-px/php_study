<div class="title">Multidimensional</div>

<?php
$data = [
    [
        "name" => "Ash",
        "age" => 25,
        "nationality" => "Montreal"
    ], [
        "name" => "Marvin",
        "age" => 45,
        "nationality" => "Noruega"
    ]
];

print_r($data);
echo '<br>' . $data[0]['age'];
echo '<br>' . $data[1]['age'];
$data[] = [
    "name" => "Chaves",
    "age" => 80,
    "nationality" => "México"
];

echo '<br>';
print_r($data[2]);

unset($data[1]);
echo '<br>';
print_r($data);
var_dump($data[1]);