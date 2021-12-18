<div class="title">Challenge switch</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversion" id="conversion">
        <option value="km-miles">km > miles</option>
        <option value="miles-km">miles > km</option>
        <option value="metre-km">metre > km</option>
        <option value="km-metre">km > metre</option>
        <option value="fahrenheit-celsius">fahrenheit > celsius</option>
        <option value="celsius-fahrenheit">celsius > fahrenheit</option>
    </select>
    <button>Calculate</button>
</form>

<?php
const KM_MILE = 0.621371;
const METRE_KM = 1000;
const CELSIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversion']) {
    case 'km-miles': {
            $distance = $param * KM_MILE;
            $msg = "$param km = $distance miles";
            break;
        }
    case 'miles-km': {
            $distance = $param / KM_MILE;
            $msg = "$param Miles = $distance km";
            break;
        }
    case 'metre-km': {
            $distance = $param / METRE_KM;
            $msg = "$param metre = $distance km";
            break;
        }
    case 'km-metre': {
            $distance = $param * METRE_KM;
            $msg = "$param km = $distance metre";
            break;
        }
    case 'fahrenheit-celsius': {
            $conversao = ($param - 32) / CELSIUS_FAHRENHEIT;
            $msg = "{$param}° fahrenheit = {$conversao}° celsius";
            break;
        }
    case 'celsius-fahrenheit': {
            $conversao = $param * CELSIUS_FAHRENHEIT + 32;
            $msg = "{$param}° celsius = {$conversao}° fahrenheit";
            break;
        }
    default:
        $msg = "no past value";
}

echo "<p>$msg</p>";
