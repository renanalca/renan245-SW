<html>
 <head>
  <title>Renan Augusto</title>
 </head>
 <body>
<form action="" method="get">
<p>Digite o inicio do loop:</p><input type="number" name="number1" /><br />
<p>Digite o fim do loop:   </p><input type="number" name="number2" /><br />
  <input type="submit" name="submit" value="Iniciar" />
 </form> 
<?php
echo '<pre>';
$numero1 = $_GET['number1'];
$numero2 = $_GET['number2'];

$num = array();
for ($i = $numero1; $i < $numero2; $i++) {
    $num[] = rand();
}
var_dump($num);



function ehpar($num) {
    if ($num % 2 == 0) {
        $retorno = true;
    }
    else {
        $retorno = false;
    }
    return $retorno;
}

foreach ($num as $key => $value) {
    echo "O numero $value:";
    if(ehpar($value)) {
        echo " É par";
    }
    else{
        echo " É impar";
    }
    echo '<br>';
}


?>
</body>
</html>