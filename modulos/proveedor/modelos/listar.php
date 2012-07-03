<?php 
include '../../../conexion.php'; 
$sqlCl="SELECT p.*, p.id AS id_per, pro.* FROM persona p INNER JOIN proveedor pro ON p.id = pro.id_persona WHERE tipo='3';";
$sql= mysql_query($sqlCl);
?>
