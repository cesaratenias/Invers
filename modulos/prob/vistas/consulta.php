<?php include '../modelos/consultar.php'; 
$resProv = mysql_fetch_array($sql); ?>

<table align="center">
    <h2 align="center">Consulta de Compra en la Obra"<?php echo $resGes['nombre'] ?>"</h2>
    <tr>
        <th>Fecha</th>
        <td><?php echo $resProv['fecha'] ?></td>
    </tr>
    <tr>
        <th>Convenio</th>
        <td><?php echo $resProv['convenio'] ?></td>
    </tr>
    <tr>
        <th>Descripci&oacute;n</th>
        <td><?php echo $resProv['descripcion'] ?></td>
    </tr>
    <tr>
        <th>Partida</th>
        <td><?php echo $resProv['partida'] ?></td>
    </tr>
    <tr>
        <th>Existencia:</th>
        <td><?php echo $resProv['existencia']." ".$resProv['nombre_p'] ?></td>
    </tr>
</table>
<br />
<center><input type="button" value="Regresar" onclick="location.href='lista.php'" /></center><br />