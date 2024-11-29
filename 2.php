<!DOCTYPE html>
<html>
<head>
    <title>Actividad 2</title>
</head>
<body>
    <h1>Funciones PHP</h1>
<?php

$num = rand(1, 10);
$arrayRomanos = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"];
echo "El número $num en romano es: " . numRomano($num, $arrayRomanos);

function numRomano($entero, $romano){
    for($i=0;$i<count($romano);$i++){
        if($entero == $i+1){
            return $romano[$i];
        }
    }
}

?>

</body>
</html>