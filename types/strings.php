<div class="title">String type</div>

<?php
echo "I'm a string";
echo '<br>';
var_dump("Me too");
echo '<br>';

// concatenation
echo "we are " . 'too';
echo '<br>', "I also accept", " commas";

echo '<br>';
echo "'Test' " . '"Test" ' . '\'Test\' ' . "\"Test\" " . "\\";

print("<br>there is also the print function");
print "<br>there is also the print function";

// some functions

echo '<br>' . strtoupper('maximize');
echo '<br>' . strtolower('minimize');
echo '<br>' . ucfirst('only the first letter');
echo '<br>' . ucwords('all words');
echo '<br>' . strlen('How many letters?');
echo '<br>' . mb_strlen('How many letters?, "utf-8');
echo '<br>' . substr('just a part', 4, 6);