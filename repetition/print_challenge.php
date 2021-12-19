<div class="title">Print challenge</div>

<?php
$arr = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($arr); $i++) {
    if($i % 2 === 1) continue;
    echo "{$arr[$i]} <br>";
}

foreach($arr as $key => $value) {
    if($key % 2 !== 0) continue;
    echo "$key";
}