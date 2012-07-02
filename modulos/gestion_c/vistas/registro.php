<?php include '../../../conexion.php'; ?>

<h2 align="center">Registro de compra</h2>
<form>
    <table align="center" class="table">
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
    <fieldset>
        <legend>Material</legend>
        <table>
            <thead>
                <tr>
                    <th>Material</th>            
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input/>
                    </td>
                    <td><input type="text" id="cantidadMP" name="cantidadMP" /></td>
                    <td><input type="button" value="Agregar"/></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>Equipo</legend>
        <table>
            <thead>
                <tr>
                    <th>Equipo</th>            
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input/>
                    </td>
                    <td><input type="text" id="cantidadMP" name="cantidadMP" /></td>
                    <td><input type="button" value="Agregar"/></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>Mano de obra</legend>
        <table>
            <thead>
                <tr>
                    <th>Material</th>            
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input/>
                    </td>
                    <td><input type="text" id="cantidadMP" name="cantidadMP" /></td>
                    <td><input type="button" value="Agregar"/></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <br/>
    <center><input type="submit" value="Guardar"/>&nbsp;&nbsp;<input type="button"value="Regresar" onclick="location.href='lista.php'" /></center>
    <br />
</form>