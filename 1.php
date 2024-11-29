<!DOCTYPE html>
<html>
<head>
    <title>Actividad 1</title>
</head>
<body>
    <h1>Funciones PHP</h1>
<?php

$hermano1 = 34;
$hermano2 = 21;

$resultado = diferenciaEdad($hermano1, $hermano2);
echo "La diferencia de edad es de $resultado años";

function diferenciaEdad($person1, $person2){
    $diferencia = abs($person1 - $person2);
    return $diferencia;                     //directamente return abs(resta) mejor
}

?>

</body>
</html>