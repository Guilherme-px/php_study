<div class="title">PI challenge</div>

<?php

echo pi();
$pi = 3.14;

if ($pi === round(pi(), 2)) {
    echo "<br>Equals";
} else {
    echo "<br> different";
}

if($pi - pi() <= 0.01) {
    echo '<br> Equals';
} else {
    echo '<br> different';
}