<div class="title">Boolean type</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// conversion rules

echo '<p>Rules:</p>';
echo '<br>' . var_dump((bool) 0); // only zero is false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // everything else is true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");