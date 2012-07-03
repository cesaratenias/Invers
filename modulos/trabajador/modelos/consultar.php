<?php
include '../../../conexion.php'; 
$id = $_GET['tra'];
$sqlCc="SELECT p.*, tra.* FROM persona p INNER JOIN trabajador tra WHERE p.id = $id;";
$sql= mysql_query($sqlCc);
?>
