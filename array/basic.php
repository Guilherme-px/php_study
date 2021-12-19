<div class="title">Array basics</div>

<?php
$list = array(1, 2, 3.4, "text");
var_dump($list);
echo '<br>';
print_r($list);

echo '<br>' . $list[0];
echo '<br>' . $list[1];
echo '<br>' . $list[2];
echo '<br>' . $list[3];
echo '<br>';

var_dump($list[3000]);