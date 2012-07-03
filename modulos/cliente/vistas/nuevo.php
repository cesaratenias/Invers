<?php include '../modelos/consulta.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <body >
        <div align="center">
            <img src="../../../imagenes/cliente.jpg" width="80" height="80" />
            <?php
            if ($_GET['acc'] == 'edicion') {
                echo "Editando Cliente";
            } else {
                echo 'Registro de Cliente';
            }
            ?>
        </div>
        <br />
        <br />
        <form action='../modelos/guardar.php' method='POST'>
            <table align="center">
                <tr>
                    <td>C&eacute;dula:</td>
                    <td><input type="text" name="cedula" /></td> 
                </tr>
                <tr>
                    <td align="center">&nbsp;</td>
                    <td>Nombre:</td>
                    <td> <input type="text" name="nombre" /></td></tr>
                <tr>
                    <td align="center">&nbsp;</td>
                    <td>Apellido:</td>
                    <td> <input type="text" name="apellido" /></td>
                </tr>
                <tr>
                    <td align="center">&nbsp;</td>
                    <td>Telefonocli:</td>
                    <td> <input type="text" name="telefono" /></td></tr>
                <tr>
                    <td align="center">&nbsp;</td>
                    <td>Direccion:</td>
                    <td> <input type="text" name="direccion"  /></td></tr>
            </table>
            </font>

            <table align ='center'>
                <tr><td align ='center'><input type='submit' name="boton" value='Guardar'></td>
                    <td><input type='submit' name="boton" value ='Cancelar'></td></tr>
            </table>
        </form>


    </body>
</html>

