<?php
include '../../../conexion.php'; 
$id = $_GET['id'];
$sqlCc="SELECT * FROM persona WHERE id = $id;";
$sql= mysql_query($sqlCc);
$sqlCc = mysql_fetch_array($sql);
?>
