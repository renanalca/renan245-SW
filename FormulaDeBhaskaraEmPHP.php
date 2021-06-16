<?php
// Valores
$a = 1;
$b = -5;
$c = 6;
//Delta
$delta = ($b*$b)-((4*$a)*$c);
//Equação
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);
//Exibindo os valores
echo ‘<strong>O valor de a é:</strong> ‘.”$a”.’<br>’;
echo ‘<strong>O valor de b é:</strong> ‘.”$b”.’<br>’;
echo ‘<strong>O valor de c é:</strong> ‘.”$c”.’<br>’;
echo ‘<strong>O valor de delta é:</strong> ‘.”$delta”.’<br>’;
echo ‘<strong>O valor de x1 é:</strong> ‘.”$x1″.’<br>’;
echo ‘<strong>O valor de x2 é:</strong> ‘.”$x2″.’<br>’;
?>