<?php
include '../../../conexion.php'; 
$id = $_GET['id'];

$selIns = "SELECT i.*, p.nombre AS nombre_p FROM insumo AS i
           INNER JOIN recurso AS r ON p.id = i.presentacion_id  WHERE i.id = $id";
$sql = mysql_query($selIns);
$resIns = mysql_fetch_array($sql);
?>