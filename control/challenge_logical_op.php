<div class="title">Challenge logical operators</div>

<form action="#" method="POST">
    <div>
        <label for="w1">Work 1</label>
        <select name="w1" id="w1">
            <option value="1">executed</option>
            <option value="0">not executed</option>
        </select>
    </div>
    <div>
        <label for="w2">Work 2</label>
        <select name="w2" id="w2">
            <option value="1">executed</option>
            <option value="0">not executed</option>
        </select>
    </div>
    <button>Run</button>
</form>

<?php
$w1 = $_POST['w1'] === '1';
$w2 = !!$_POST['w2'];
$tv = '';
$IceCream = false;

if($w1 && $w2) {
    $tv = '50"';
} elseif($w1 xor $w2) {
    $tv = '32';
}

if($w1 or $w2) {
    $IceCream = true;
}

if($tv) {
    $result = "let's buy a TV from $tv";
} else {
    $result = "let's not buy a new tv";
}

if(!$IceCream) {
    $result .= '<br>we are healthier!';
} else {
    $result .= '<br>Lets have an ice cream';
}

echo "<p>$result<p>";