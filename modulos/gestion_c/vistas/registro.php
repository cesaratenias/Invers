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
                <input required type="text" name="convenio" />
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Materiales</td>
            <td>
                <input required type="text" name="mate" />
            </td>
            <td>Costo</td>
            <td>
                <input required type="text" name="cant" size="4"/>
            </td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td>Equipos</td>
            <td>
                <input required type="text" name="mate" />
            </td>
            <td>Costo</td>
            <td>
                <input required type="text" name="cant" size="4"/>
            </td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td>Mano de Obra</td>
            <td>
                <input required type="text" name="mate" />
            </td>
            <td>Costo</td>
            <td>
                <input required type="text" name="cant" size="4"/>
            </td>
        </tr>        
        <tr><td><br></td></tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Total</td>
            <td>
                <input required type="text" name="total" size="5"/>
        </tr>
    </table>
    <br/>
    <center><input type="submit" value="Guardar"/>&nbsp;&nbsp;<input type="button"value="Regresar" onclick="location.href='lista.php'" /></center>
    <br />
</form>