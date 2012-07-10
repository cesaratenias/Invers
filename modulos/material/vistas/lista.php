<?php include '../../../conexion.php'; ?>
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
            <h2 align="center">Lista de materiales</h2>
            <div align="left">
                <a href="registro.php" title="Nuevo"><img alt="nuevo" src="../../../imagenes/nuevo.png" />Nuevo</a>
            </div>
            <br/>
            <table id="listado" class="table">
                <thead>
                    <tr>
                        <th>C&oacute;digo</th>
                        <th>Nombre</th>
                        <th>Descuento</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../modelos/listar.php';
                    while ($resMat = mysql_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $resMat['cod'] ?></td>
                            <td><?php echo $resMat['descripcion'] ?></td>
                            <td><?php echo $resMat['descuento'] ?></td>
                            <td><?php echo $resMat['costo'] ?></td>
                            <td>
                                <a href="#"><img width="12" height="12" src="../../../imagenes/consulta.png" />Consultar</a><br />
                                <a href="#"><img width="12" height="12" src="../../../imagenes/edita.gif" />Editar</a><br />
                                <a href="#"><img width="12" height="12" src="../../../imagenes/borrar.png" />Borrar</a><br />
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <br/>
        </center>
