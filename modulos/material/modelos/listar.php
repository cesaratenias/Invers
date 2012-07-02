<?php
include '../../../conexion.php';
$selMat = "SELECT ma.*, re.* FROM material ma 
          INNER JOIN recurso re ON ma.id = re.id_recurso
          where tipo = 1";
$sql = mysql_query($selMat);
?>