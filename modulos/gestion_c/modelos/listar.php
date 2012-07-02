<?php
include '../../../conexion.php';
$selGes = "SELECT mg.*, dg.*, o.* FROM obra o 
          INNER JOIN m_gestion_c mg ON o.id = mg.id_obra
          INNER JOIN d_gestion_c dg ON mg.id = dg.id_maestro";
$sql = mysql_query($selGes);
?>
