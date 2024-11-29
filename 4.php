<!DOCTYPE html>
<html>
<head>
    <title>Actividad 4</title>
</head>
<body>
    <h1>Funciones PHP</h1>
<?php

$empleados = [
    'Juan'=>[
      'horas' => 40,
      'tarifa' => 15
    ],
    'Perico'=>[
      'horas' => 20,
      'tarifa' => 25
    ],
    'Andrés'=>[
      'horas' => 45
    ],
];
$horasSemana = 0;
$tarifaHora = 0;
$horasExtra = 0;
$pagaExtra = 0;
$total = 0;

foreach($empleados as $empleado => $datos){

    $numHoras = $datos["horas"];
    $tipoTarifa = $datos["tarifa"] ?? 10;
    $salario = calculaSalario($numHoras, $tipoTarifa);
    echo "Esta semana, el empleado $empleado ha cobrado $salario euros <br>";
}




function calculaSalario($horas, $tarifa=10){
    if ($horas > 40){
        $tarifa*= 1.25;
    }
    return $horas * $tarifa;   
}

?>

</body>
</html>

