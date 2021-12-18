<div class="title">Conversions</div>

<?php
echo is_int(PHP_INT_MAX);

// Ini to float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float tp int
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump(round(2.8));