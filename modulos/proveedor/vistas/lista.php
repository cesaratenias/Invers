<?php
include '../../../conexion.php';
include_once '../modelos/listar.php';
?>
<html>
    <head>
        <script type="text/javascript" src="../../../js/jquery.js"></script>
        <script type="text/javascript" src="../../../js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="../../../js/jquery.dataTables.min.js"></script>
        <link type="text/css" href="../../../css/jquery.dataTables.css" rel="stylesheet" />
        <link type="text/css" href="../../../css/estilo.css" rel="stylesheet" />
        <script>
            $(document).ready(function() {
                $('#listado').dataTable({
                    "bLengthChange": false,
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"
                });
        </script>
    </head>
    <body>        
        <div align="center">
            <h2 align="center">Lista de Proveedores</h2>
            <div align="left">    
                <a href="registro.php?acc=registro&id=0" target="sistema"><img alt="nuevo" width="12" height="12" src="../../../imagenes/nuevo.png" />Nuevo</a>
            </div>
            <table id="listado" class="table">
                <thead>
                    <tr>
                        <th>Rift</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Suministro</th>
                        <th>Acciones</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = mysql_num_rows($sql);
                    while ($resProv = mysql_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $resProv['cedula'] ?></td>
                            <td><?php echo $resProv['nombre'] ?></td>
                            <td><?php echo $resProv['telefono'] ?></td>
                            <td><?php echo $resProv['direccion'] ?></td>
                            <td><?php echo $resProv['suministra'] ?></td>
                            <td>
                                <a href="#"><img width="12" height="12" src="../../../imagenes/consulta.png" />Consultar</a><br />
                                <a href="#"><img width="12" height="12" src="../../../imagenes/edita.gif" />Editar</a><br />
                                <a href="#"><img width="12" height="12" src="../../../imagenes/borrar.png" />Borrar</a><br />
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
