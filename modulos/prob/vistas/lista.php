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
            <h2 align="center">Gestion de compras</h2>
            <div align="left">
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
                        <th>Total</th>
                        <th>Acciones</th>
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
                            <td><?php echo $resGes['total'] ?></td>
                            <td>
                                <a href="consulta.php?id=<?php echo $resGes['id'] ?>"><img width="13" height="13" src="../../../imagenes/consulta.png" />&nbsp;Consultar</a><br />
                               </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <br/></div>
