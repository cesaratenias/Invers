<?php include '../../../conexion.php'; ?>
<script type="text/javascript" src="./../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="../../../js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#listado').dataTable({
            "bLengthChange": false,
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
</script>

<h2 align="center">Gestion de compras</h2>
<div class="barra-tool">
    <a href="registro.php" title="Nuevo"><img alt="nuevo" src="../../../imagenes/nuevo.png" />Nuevo</a>
</div>
<br/>
<table id="listado" class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Convenio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../modelos/listar.php';
        while ($resGes = mysql_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $resGes['fecha'] ?></td>
                <td><?php echo $resGes['nombre'] ?></td>
                <td><?php echo $resGes['descripcion'] ?></td>
                <td><?php echo $resGes['convenio'] ?></td>
                <td>
                    <a href="#"><img width="13" height="13" src="#" />&nbsp;Consultar</a><br />
                    <a href="#"><img width="13" height="13" src="#" />&nbsp;Editar</a><br />
                    <a onclick="if(confirm('Esta seguro que desea borrar el registro?')){
                            location.href='#' }"><img width="13" height="13" src="#" />&nbsp;Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<br/>