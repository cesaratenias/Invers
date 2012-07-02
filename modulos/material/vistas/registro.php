<?php include '../../../conexion.php'; ?>

<h2 align="center">Registro de Material</h2>
<form>
    <table align="center" class="formulario">
        <tr>
            <th>C&oacute;digo</th>
            <td>
                <input required type="text" name="codigo" autofocus/>
            </td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>
                <input required minlength="3" type="text" name="nombre" />
            </td>
        </tr>
        <tr>
            <th>Descuento</th>
            <td>
                <input required type="text" name="descuento"/>
            </td>
        </tr>
        <tr>
            <th>Costo</th>
            <td>
                <input required type="text" name="costo"/>
            </td>
        </tr>
    </table>
    <br/>
    <center><input type="submit" value="Guardar"/>&nbsp;&nbsp;<input type="button"value="Regresar" onclick="location.href='lista.php'" /></center>
    <br />
</form>