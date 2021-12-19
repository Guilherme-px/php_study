<div class="title">Challenge for</div>

<?php
$print = '';
for($count = 1; $count <= 5; $count++) {
    $print .= '#';
    echo "$print <br>";
}

echo '<hr>';

for(
    $print2 = '#';
    $print2 !== '######';
    $print2 .= '#'
) {
    echo "$print2 <br>";
}