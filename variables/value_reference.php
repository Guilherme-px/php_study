<div class="title">Value vs reference</div>

<?php
$var = 'initial value';
echo $var;

// attribution by value
$varValue = $var;
echo "<br>$varValue";
$varValue = 'new value';
echo "<br>$var - ";
echo "$varValue";

// attribution by reference
$varReference = &$var;
$varReference = 'same reference';
echo "<br>$var - $varReference";