<?php

include('conexion.php');


$fecha = $_POST["fecha"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$mail = $_POST["mail"];
$producto = $_POST["producto"];
$marca = $_POST["marca"];
$numSerie = $_POST["numSerie"];
$modelo = $_POST["modelo"];
$problema = $_POST["problema"];
$diagnostico = "Sin diagnostico";
$repuesto = "Sin definir";
$costoRepuesto = 0;
$costoTotal = 0;
$estado = 1;
$fechaEntrega = NULL;


$sql = "INSERT INTO reparar (fecha,nombre,telefono,mail,producto,marca,numSerie,modelo,problema,diagnostico,repuesto,costoRepuesto,costoTotal,estado,fechaEntrega) VALUES ('$fecha','$nombre','$telefono','$mail','$producto','$marca','$numSerie','$modelo','$problema','$diagnostico','$repuesto','$costoRepuesto','$costoTotal','$estado','$fechaEntrega')";


mysqli_query($conexion, $sql);



header("location:historico.php?nombre=1");

?>
