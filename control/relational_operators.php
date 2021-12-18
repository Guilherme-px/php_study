<div class="title">Relational operators</div>

<?php

var_dump(1 == 1);
var_dump(1 === 1);
var_dump(1 == '1');
var_dump(1 === '1');
var_dump(1 < 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 <= 1);
var_dump(1 != 1);
var_dump(1 !== 1);
var_dump(1 != '1');
var_dump(1 !== '1');

echo "<p>Spaceship</p><hr>";
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

?>

<style>
    p{
        margin-top: 2em;
    }

    hr {
        margin-top: 0;
    }
</style>