<div class="title">Variables variables</div>

<?php

$a = 'valueA';
$$a = 'valueAA';
echo "$a {$$a} ${$a} $valueA";