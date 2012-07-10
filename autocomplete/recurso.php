<?php
$return_arr = array();
if (($link = mysql_connect("localhost", "root", "")) && (mysql_select_db("inversiones", $link))) {
    $BusReg =  "SELECT * FROM recurso WHERE (cod like '%" . $_GET['term'] . "%') OR (descripcion like '%" . $_GET['term'] . "%') ";
    $sql = mysql_query($BusReg);
    $BusRes = mysql_num_rows($sql);

    if ($BusRes != 0) {
        while ($row = mysql_fetch_array($sql)) {
            $row_array['id'] = $row['id'];
            $row_array['value'] = $row['cod'] . ' ' . $row['descripcion'];
            array_push($return_arr, $row_array);
        }
    }
    echo json_encode($return_arr);
}
?>