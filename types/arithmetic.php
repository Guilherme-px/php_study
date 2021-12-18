<div class="title">Arithmetic operations</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
// echo 7 / 0, '<br>'; # error
echo 4 ** 2, '<br>';
echo '<br>';

// Operations precedence
// () => ** => / * % => + -
echo '<p>Precedence</p> <br>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
