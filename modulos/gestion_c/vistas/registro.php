<?php include '../../../conexion.php'; ?>

<h2 align="center">Registro de compra</h2>
<form>
    <table align="center" class="formulario">
        <tr>
            <td>Fecha</td>
            <td><?php echo date('d-m-Y'); ?></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>
                <input required type="text" name="nombre" autofocus />
            </td>
        </tr>
        <tr>
            <td>Convenio</td>
            <td>
                <input required type="text" name="convenio" id="rif"/>
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td>
                <input required type="text" name="total"/>
        </tr>
    </table>
    <br/>
    <center><input type="submit" value="Guardar"/>&nbsp;&nbsp;<input type="button"value="Regresar" onclick="location.href='lista.php'" /></center>
    <br />
</form>