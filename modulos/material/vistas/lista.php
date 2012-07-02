<?php include '../../../conexion.php'; ?>
<script type="text/javascript" src="../../../js/jquery.js"></script>
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
<center>
<h2 align="center">Lista de materiales</h2>
<div class="barra-tool">
    <a href="registro.php" title="Nuevo"><img alt="nuevo" src="libs/img/add.png" /></a>
</div>
<br/>
<table id="listado">
    <thead>
        <tr>
            <th>C&oacute;digo</th>
            <th>Nombre</th>
            <th>Descuento</th>
            <th>Costo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../modelos/listar.php';
        while ($resMat = mysql_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $resMat['cod'] ?></td>
                <td><?php echo $resMat['nombre'] ?></td>
                <td><?php echo $resMat['descuento'] ?></td>
                <td><?php echo $resMat['costo'] ?></td>
                <td>
                    <a href="#"><img width="13" height="13" src="libs/img/ver.png" />&nbsp;Consultar</a><br />
                    <a href="#"><img width="13" height="13" src="libs/img/edit.png" />&nbsp;Editar</a><br />
                    <a onclick="if(confirm('Esta seguro que desea borrar el registro?')){
                            location.href='#' }"><img width="13" height="13" src="libs/img/dele.png" />&nbsp;Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<br/>
</center>