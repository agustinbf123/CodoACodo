<?php 
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$hobbie = $_GET["hobbie"];
$EditorDeCodigoPreferido = $_GET["edicope"];
$SistemaOperativo = $_GET["so"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
<style>
    .data {color: red; }
</style>
    <h3><center>¡Bienvenido al Sistema!</center></h3>
    <p id="start"> Los datos ingresados son :</p>
    <p class="data">NOMBRE: <?=$nombre?></p>
    <p class="data">APELLIDO: <?=$apellido?></p>
    <p class="data">HOBBIE: <?=$hobbie?></p>
    <p class="data">Editor de Codigo Preferido: <?=$EditorDeCodigoPreferido?></p>
    <p class="data">SISTEMA OPERATIVO: <?=$SistemaOperativo?></p>
</body>
</html>