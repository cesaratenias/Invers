<?php
include '../../../conexion.php';
include '../utils/functions.php';

$fecha = phpasql(date('d-m-Y'));
$nombre = $_POST['nombre'];
$des = $_POST['des'];
$convenio = $_POST['convenio'];
$partida = $_POST['partida'];

if (!empty($_POST['mp']) && !empty($_POST['cantidad']) && !empty($_POST['total'])) {

    $mps = $_POST['mp'];
    $cantidades = $_POST['cantidad'];
    $totales= $_POST['total'];
    $i = 0;
    foreach ($cantidades as $item => $valor) {
        $arrCant[$i] = $valor;
        $i++;
    }

    $i = 0;
    foreach ($mps as $mp => $valor) {
        $arrMP[$i] = $valor;
        $i++;
    }
    
    $i = 0;
    foreach ($totales as $total => $valor) {
        $arrTotal[$i] = $valor;
        $i++;
    }
    
    $sql1 = "INSERT INTO obra (nombre, descrpcion, convenio, partida) ";
    $sql1.= "VALUES ('$nombre', '$des', '$convenio', '$partida')";
    $sql = mysql_query($sql1);
    $idR = mysql_insert_id();
    
    $InsRec = "INSERT INTO m_gestion_c (fecha, id_obra) ";
    $InsRec.= "VALUES ('$fecha', '$idR')";
    $sql = mysql_query($InsRec);
    $idRec = mysql_insert_id();
    if ($sql) {
        for ($i = 0; $i < count($arrMP); $i++) {
            $InsDetRec = "INSERT INTO d_gestion_c (id_recurso, cant, total, id_maestro) ";
            $InsDetRec.= "VALUES ($arrMP[$i], $arrCant[$i], $arrTottal[$i], '$idRec')";
            $sql2 = mysql_query($InsDetRec);
        }?>
                <center>
        <div><img src="../../../imagenes/bien.png"/>Guardada satisfactoriamente</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/lista.php'", 3000);
    </script>
            <?php
        } else {
            ?>
            <center>
        <div>Ha ocurrido un error con los recursos, contacte al administrador</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/lista.php'", 3000);
    </script>
        <?php

        }
    } else {
        ?>
        <center>
        <div>Ha ocurrido un error con agregar, contacte al administrador</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/lista.php'", 3000);
    </script>
        <?php
    }
?>