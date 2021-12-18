<div class="title">Logical operators</div>

<?php
echo "<p>T ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p>Truth table 'AND'</P><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo '<br>';

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p>Truth table 'OR'</P><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo '<br>';

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p>Truth table 'XOR'</P><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

?>

<style>
    p {
        margin-top: 2em;
        font-weight: bold;
    }

    hr {
        margin-top: 0;
    }
</style>