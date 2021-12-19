<div class="title">Default argument</div>

<?php
function salutation($name = 'Sr/lady', $surname = 'Client')
{
    return "Welcome, $name $surname!<br>";
}

echo salutation();
echo salutation(NULL);
echo salutation(null, NULL);
echo salutation('master', 'supreme');

function takeOrder($food, $drink = 'Water')
{
    echo "to eat: $food <br>";
    echo "to drink: $drink <br>";
}

takeOrder('Hamburguer');
takeOrder('Pizza', 'Soda');

function takeOrder2($drink = 'Water', $food)
{
    echo "to eat: $food <br>";
    echo "to drink: $drink <br>";
}

takeOrder2('Soda2', 'Pizza2');
