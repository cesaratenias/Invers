<?php include '../../../conexion.php'; ?>

<body >
    <div align="center"><font color="#000000" face="normal" size="5"><img src="../../../imagenes/proveedor.jpg" width="70" height="63" /><h2 align="center">Registro de proveedor</h2></font></div>
    <br />
    <form actio="<?php
if ($_GET['acc'] == 'edicion') {
    echo "../modelos/editar.php&acc=editar&pro=" . $_GET['pro'];
} else {
    echo "../modelos/guardar.php";
}
?>" method="POST">
        <table align="center" class="table">
            <tr>
                <td width="130">Cedula:</td>
                <td width="151"> <input type="text" name="cedula" /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input required type="text" name="nombre" autofocus /></td></tr>
            <tr>
                <td>Apellido</td>
                <td><input required type="text" name="apellido" /></td></tr>
            <tr>
            <tr>
                <td>Rif</td>
                <td><input required type="text" name="rif" /></td></tr>
            <tr>
                <td>Empresa</td>
                <td><input required type="text" name="empresa" /></td></tr>
            <tr>
                <td>Telefono</td>
                <td><input required type="text" name="telefono" /></td></tr>
            <tr>
                <td>Suministra</td>
                <td><input required type="text" name="suministra" /></td></tr>
            <tr>
                <td>Direccion</td>
                <td><input required type="text" name="direccion" /></td></tr>
        </table>
        <table align ='center'>
            <br />
            <center>
                <input type='submit' name="boton" value='Guardar'>
                <input type='button' value ='regresar' onclick="location.href='lista.php'">
            </center>
        </table>
    </form>
</body>
</html>