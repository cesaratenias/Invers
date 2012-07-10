<?php
function phpasql($fechaVista) {
    $fechaPicada = explode('-', $fechaVista);
    $fecha = trim($fechaPicada[2]) . "-" . trim($fechaPicada[1]) . "-" . trim($fechaPicada[0]);
    return $fecha;
}

function phpasqlchora($fechaVista) {
    $fechaPicada = explode(' ', $fechaVista);
    $fechaPicada[0] = explode('-', $fechaPicada[0]);
    $fecha = $fechaPicada[0][2] . "-" . $fechaPicada[0][1] . "-" . $fechaPicada[0][0] . ' ' . $fechaPicada[1];
    return $fecha;
}

function sqlaphp($fechaSql) {
    $fechaPicada = explode('-', $fechaSql);
    $fecha = trim($fechaPicada[2]) . "-" . trim($fechaPicada[1]) . "-" . trim($fechaPicada[0]);
    return $fecha;
}

function sqlaphpchora($fechaVista) {
    $fechaPicada = explode(' ', $fechaVista);
    $fechaPicada[0] = explode('-', $fechaPicada[0]);
    $fecha = $fechaPicada[0][2] . "-" . $fechaPicada[0][1] . "-" . $fechaPicada[0][0] . ' ' . $fechaPicada[1];
    return $fecha;
}

function errores($error) {
    switch ($error) {
        case '1':
            $mensaje = 'Por favor, ingrese al menos un producto y su cantidad.';
            break;
        case '2':
            $mensaje = 'Por favor verifique que los campos Nro. pedido, Fecha de Vencimiento y Cliente sean válidos.';
            break;
        case 'f':
            $mensaje = 'El registro ha sido guardado satisfactoriamente.';
            break;
        case '3':
            $mensaje = 'El registro no ha sido guardado satisfactoriamente, intente de nuevo.';
            break;
        case '4':
            $mensaje = 'Por favor verifique que los campos Nro. factura y Cliente sean válidos.';
            break;
        case '5':
            $mensaje = 'Por favor, ingrese al menos un insumo y su cantidad.';
            break;
        case '6':
            $mensaje = 'Por favor verifique el campo Nro. factura.';
            break;
        case '7':
            $mensaje = 'Por favor verifique los campos nombre y cantidad.';
            break;
        case '8':
            $mensaje = 'El registro no se pudo eliminar, intente de nuevo.';
            break;
        case '9':
            $mensaje = 'El registro ha sido eliminado con exito.';
            break;
    }
    return $mensaje;
}
?>