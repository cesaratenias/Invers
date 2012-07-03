<?php include '../modelos/consultar.php'; 
$resProv = mysql_fetch_array($sql); ?>

<table align="center">
    <h2 align="center">Consulta de proveedor</h2>
    <tr>
        <th>Cedula</th>
        <td><?php echo $resProv['cedula'] ?></td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td><?php echo $resProv['nombre'] ?></td>
    </tr>
    <tr>
        <th>Tel&eacute;fono</th>
        <td><?php echo $resProv['telefono'] ?></td>
    </tr>
    <tr>
        <th>Direcci&oacute;n</th>
        <td><?php echo $resProv['direccion'] ?></td>
    </tr>
    <tr>
        <th>Suministro</th>
        <td><?php echo $resProv['suministro'] ?></td>
    </tr>
</table>
<br />
<center><input type="button" value="Regresar" onclick="location.href='lista.php'" /></center><br />