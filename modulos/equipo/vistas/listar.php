<?php include_once '../modelos/listar.php'; ?>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#listado').dataTable({
            "bLengthChange": false,
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
</script>
<table id="listado" >
    <thead>
        <tr>
            <th>C&oacute;digo</th>
            <th>Nombre</th>
            <th>Costo</th>
            <th>Acciones</th>    
        </tr>
    </thead>
    <tbody>
        <?php
        $rows = mysql_num_rows($sql);
        while ($resIns = mysql_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $resIns['cod'] ?></td>
                <td><?php echo $resIns['descripcion'] ?></td>
                <td>BsF. <?php echo $resIns['costo'] ?></td>
                <td>
                    <a href="#"><img width="12" height="12" src="../../../imagenes/consulta.png" />Consultar</a><br />
                    <a href="#"><img width="12" height="12" src="../../../imagenes/edita.png" />Editar</a><br />
                </td>
            </tr>
            <?php }
        ?>
    </tbody>
</table>