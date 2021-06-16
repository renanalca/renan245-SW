<?php 

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$delta = ($b * $b) - ((4 * $a) * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);

if ($x1 != "NAN" and $x2 != "NAN") {

echo "x1 = " . $x1 . "<br ?-->";
echo "x2 = " . $x2;

} else {
echo "Impossivel calcular o valor,
delta negativo (".$delta.")";
}
?>
