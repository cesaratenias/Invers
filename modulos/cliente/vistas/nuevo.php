<?php include '../modelos/consulta.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <body >
        <div align="center">
            <img src="../../../imagenes/cliente.jpg" width="80" height="80" />
            <h2><?php
            if ($_GET['acc'] == 'edicion') {
                echo "Editando Cliente";
            } else {
                echo 'Registro de Cliente';
            }
            ?></h2>
        </div>
        <br />
        <br />
        <form action="<?php
if ($_GET['acc'] == 'edicion') {
    echo "../modelos/editar.php?acc=editar&id=" . $_GET['id'];
} else {
    echo "../modelos/guardar.php?acc=guardar";
}
?>" method='POST'>
            <table align="center">
                <tr>
                    <td>C&eacute;dula:</td>
                    <td><input required type="text" name="cedula" value="<?php  if (isset($sqlCc)) {echo $sqlCc['cedula'];}?>"/></td> 
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td> <input type="text" name="nombre" value="<?php  if (isset($sqlCc)) {echo $sqlCc['nombre'];}?>" /></td></tr>
                <tr>
                    <td>Apellido:</td>
                    <td> <input type="text" name="apellido" value="<?php  if (isset($sqlCc)) {echo $sqlCc['apellido'];}?>" /></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td> <input type="text" name="telefono" value="<?php  if (isset($sqlCc)) {echo $sqlCc['telefono'];}?>" /></td></tr>
                <tr>
                    <td>Direccion:</td>
                    <td> <textarea  name="direccion" cols="26" rows="5"><?php  if (isset($sqlCc)) {echo $sqlCc['direccion'];}?></textarea></td></tr>
            </table>
            </font>
            <table align ='center'>
                <tr><td align ='center'><input type='submit' value='Guardar'></td>
                    <td><input type='submit' name="boton" value ='Cancelar'></td></tr>
            </table>
        </form>


    </body>
</html>

