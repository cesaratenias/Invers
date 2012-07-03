<?php include '../../../conexion.php'; ?>
<?php include '../modelos/consultar.php'; ?>

<body >
<h2 align="center">
    <?php
    if ($_GET['acc'] == 'registro') {
        echo 'Registro de Proveedor';
    } else {
        echo "Editando Proveedor";
    }
    ?>
</h2>
    <form action="<?php if ($_GET['acc'] == 'edicion') { echo "../modelos/guardar.php?acc=editar&id=" . $_GET['id'];
} else {
    echo "../modelos/guardar.php?acc=guardar";
}
?>" 
method="POST">
        <table align="center" class="table">
            <tr>
                <td>Rif</td>
                <td><input required type="text" name="cedula" value="<?php  if (isset($sqlCp)) {echo $sqlCp['cedula'];}?>" autofocus /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input required type="text" name="nombre" value="<?php  if (isset($sqlCp)) {echo $sqlCp['nombre'];}?>"/></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input required type="text" name="telefono" value="<?php  if (isset($sqlCp)) {echo $sqlCp['telefono'];}?>"/></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td> <textarea  name="direccion" cols="26" rows="5"><?php  if (isset($sqlCp)) {echo $sqlCp['direccion'];}?></textarea></td>
            </tr>
            <tr>
                <td>Suministra</td>
                <td><input required type="text" name="suministro" value="<?php  if (isset($sqlCp)) {echo $sqlCp['suministro'];}?>"/></td>
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
