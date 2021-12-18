<div class="title">String challenge</div>

<?php
// Evaluating php documentation methods
// which method returns the position of the text 'abc
// in the string '!AbcaBcabc' returns 1

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabC', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabC'), strtolower('ABC'));
