<!DOCTYPE html>
<html>
<head>
    <title>Actividad 3</title>
</head>
<body>
    <h1>Funciones PHP</h1>
<?php

$combiNumeros = [];
$i = 0;

while ($i < 6){
    $num = dameNumero();
    if(!in_array($num, $combiNumeros)){
        $combiNumeros[$i] = dameNumero();
        $i++;
    }
}

function dameNumero(){
    $numPremiado = rand(1,49);
    return $numPremiado;
}

echo "El número premiado es: " . implode(", ", $combiNumeros);
?>

</body>
</html>