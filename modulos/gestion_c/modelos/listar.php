<?php
include '../../../conexion.php';
$selMat = "SELECT mg.*, dg.*, o.* FROM m_gestion_c mg 
          INNER JOIN obra o ON re.id = ma.id_recurso
          INNER JOIN d_destion_c dg ON re.id = ma.id_recurso
          where tipo = 1";
$sql = mysql_query($selMat);
?>