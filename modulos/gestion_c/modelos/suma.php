<?php
$suma = "SELECT * SUM( costo.re + costo.o + costo.ma) AS 'totall' FROM d_gestion_c AS dg 
INNER JOIN recurso AS re ON re.id = dg.id_recurso
INNER JOIN material AS ma ON re.id = ma.id_recurso WHERE tipo = 1
INNER JOIN equipo AS eq ON re.id = eq.id_recurso WHERE tipo = 2";
?>
