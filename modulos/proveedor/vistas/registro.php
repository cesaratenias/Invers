<?php include '../../../conexion.php'; ?>
<?php include '../modelos/consulta.php'; ?>

<body >
<h2 align="center">
    <?php
    if ($_GET['acc'] == 'registro') {
        echo 'Registro de Proveedor';
    } else {
        echo "Editando \"" . $resPro['detalle'] . "\"";
    }
    ?>
</h2>
    <form action='../modelos/guardar.php' method="POST">
        <table align="center" class="table">
            <tr>
                <td>Rift</td>
                <td><input required type="text" name="cedula" value="<?php echo $resProv['cedula'] ?>" autofocus /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input required type="text" name="nombre" value="<?php echo $resProv['nombre'] ?>"/></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input required type="text" name="telefono" value="<?php echo $resProv['telefono'] ?>"/></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input required type="text" name="direccion" value="<?php echo $resProv['direccion'] ?>"/></td>
            </tr>
            <tr>
                <td>Suministra</td>
                <td><input required type="text" name="suministro" value="<?php echo $resProv['suministro'] ?>"/></td>
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