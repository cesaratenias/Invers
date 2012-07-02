<?php
include '../../../conexion.php';
$selMat = "SELECT ma.*, re.* FROM material ma 
          INNER JOIN recurso re ON re.id = ma.id_recurso
          WHERE re.tipo = 1";
$sql = mysql_query($selMat);
?>
