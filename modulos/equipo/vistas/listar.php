<?php
include_once '../modelos/listar.php';
include '../../../conexion.php';
?>
<html>
    <head>
        <script type="text/javascript" src="../../../js/jquery-1.6.2.min.js"></script>
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
            });
        </script>
    </head>
    <body>        
        <div align="center">
            <h2 align="center">Lista de Equipos</h2>
            <div align="left">    
                <a href="nuevo.php" target="sistema"><img alt="nuevo" width="12" height="12" src="../../../imagenes/nuevo.png" />Nuevo</a>
            </div>
            <table id="listado" class="table">
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
                    while ($resEl = mysql_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $resEl['cod'] ?></td>
                            <td><?php echo $resEl['descripcion'] ?></td>
                            <td>BsF. <?php echo $resEl['costo'] ?></td>
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
