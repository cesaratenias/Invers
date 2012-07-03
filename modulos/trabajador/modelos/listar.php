<?php 
include '../../../conexion.php';
$sqlCl="SELECT p.*, tra.* FROM persona p INNER JOIN trabajador tra ON p.id = tra.id_persona WHERE tipo='2';";
$sql= mysql_query($sqlCl);
?>