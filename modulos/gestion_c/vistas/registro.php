<?php include '../../../conexion.php'; ?>
<?php include '../../material/modelos/listar.php'; ?>
<script type="text/javascript" src="../utils/functions.js"></script>

<h2 align="center">Registro de compra</h2>
<form action="../modelos/guardar.php" method="POST">
    <table align="center" class="formulario">
        <tr>
            <td>Fecha</td>
            <td><?php echo date('d-m-Y'); ?></td>
        </tr>
        <tr>
            <td>Nombre de la obra</td>
            <td>
                <input required type="text" name="nombre" autofocus />
            </td>
        </tr>
        <tr>
            <td>Descrici&oacute;n de la obra</td>
            <td>
                <input required type="text" name="convenio" />
            </td>
        </tr>
        <tr>
            <td>Convenio</td>
            <td>
                <input required type="text" name="convenio" />
            </td>
        </tr>
        <tr>
            <td>Partida</td>
            <td>
                <input required type="text" name="partida" />
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <table align="center" id="detalle"  class="lista">
            <thead>
                <tr>
                    <th>Recurso</th>            
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" id="mpA" name="mpA" onkeypress="verificar()" />
                        <input type="hidden" id="idMP" name="idMP" />
                    </td>
                    <td><input type="text" id="cantidadMP" name="cantidadMP" size="7"/></td>
                    <td>
                        <input type="text" id="totalMP" name="totalMP" />
                    </td>
                    <td><input type="button" value="Agregar" onclick="agregar($('#mpA').val(), $('#cantidadMP').val(), $('#idMP').val(), $('#totalMP').val())" /></td>
                </tr>
            </tbody>
        </table>
        <br/>
        <center><input type="submit" value="Guardar"/>&nbsp;&nbsp;<input type="button"value="Regresar" onclick="location.href='lista.php'" /></center>
        <br />
</form>