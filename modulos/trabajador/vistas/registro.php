<?php
include '../../../conexion.php';
include '../modelos/consultar.php';
$resTra = mysql_fetch_array($sqlCc);
?>

<body >
    <div align="center"><font color="#000000" face="normal" size="5"><img src="../../../imagenes/trabajador.jpg" width="70" height="63" />
        <h2 align="center">Registro de empleados</h2></font></div>
    <h2 align="center">
        <?php
        if ($_GET['acc'] == 'registro') {
            echo 'Registro de Empleados';
        } else {
            echo "Editando \"" . $resTra['nombre'] . "\"";
            include '../modelos/consultar.php';
            $resTra = mysql_fetch_array($sqlCc);
        }
        ?>
    </h2>
    <form action='../modelos/guardar.php' method="POST">
        <table align="center" class="table">
            <tr>
                <td>Cedula</td>
                <td><input required type="text" name="cedula" value="<?php echo $resTra['cedula'] ?>" autofocus /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input required type="text" name="nombre" value="<?php echo $resTra['nombre'] ?>"/></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input required type="text" name="apellido" value="<?php echo $resTra['apellido'] ?>"/></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input required type="text" name="telefono" value="<?php echo $resTra['telefono'] ?>"/></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input required type="text" name="direccion" value="<?php echo $resTra['direccion'] ?>"/></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><input required type="text" name="area" value="<?php echo $resTra['area'] ?>"/></td>
            </tr>
            <tr>
                <td>Mantenimiento</td>
                <td><input required type="text" name="mantenimiento" value="<?php echo $resTra['mantenimiento'] ?>"/></td>
            </tr>
        </table>
        <table align ='center'>
            <br />
            <center>
                <input type='submit' value='Guardar'>
                <input type='button' value ='regresar' onclick="location.href='lista.php'">
            </center>
        </table>
    </form>
</body>
</html>