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
            <h2 align="center">Lista de Clientes</h2>
            <div align="left">    
                <a href="nuevo.php" target="sistema"><img alt="nuevo" width="12" height="12" src="../../../imagenes/nuevo.png" />Nuevo</a>
            </div>
            <table id="listado" class="table">
                <thead>
                    <tr>
                        <th>C&eacute;dula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direcci&oacute;n</th>
                        <th>Acciones</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = mysql_num_rows($sql);
                    while ($resCl = mysql_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $resCl['cedula'] ?></td>
                            <td><?php echo $resCl['nombre'] ?></td>
                            <td><?php echo $resCl['apellido'] ?></td>
                            <td><?php echo $resCl['telefono'] ?></td>
                            <td><?php echo $resCl['direccion'] ?></td>
                            <td>
                                <a href="consultar.php&id=<?php echo $resCl['id'] ?>"><img width="12" height="12" src="../../../imagenes/consulta.png" />Consultar</a><br />
                                <a href="nuevo.php&acc=&edicion&id=<?php echo $resCl['id'] ?>"><img width="12" height="12" src="../../../imagenes/edita.gif" />Editar</a><br />
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
