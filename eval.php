<?php
$cedula=$_REQUEST['cedula'];
$boton=$_POST['boton'];

// 1. conectar con mysql
        $conectar=mysql_connect('localhost','root','');
        // 2. seleccionar base de datos
        mysql_select_db('escuela');

/*$nota2="select  `ceduladoc`, `ceduladoce`, `pnombredoc` from `docente`, `alumdoc` where `ceduladoc`=`docente`.`ceduladoce`";
$resul2= mysql_query($nota2);
$nfilas3= mysql_num_rows ($resul2);
if ($nfilas3>0)
{
$registro= mysql_fetch_array ($resul3);
$pnombredoc =$registro['pnombredoc' ];
}

*/
$nota1="select * from alumdoc where cedulaal='$cedula'";
$resul1=mysql_query($nota1);
$nfilas2=mysql_num_rows ($resul1);
if ($nfilas2>0)
{

$registro=mysql_fetch_array ($resul1);
    $cedulaal=$registro[0];
	$ceduladoc=$registro[1];
	$grado=$registro[2];
	$seccion=$registro[3];
	$anoescolar=$registro[4];
	$notauno=$registro[5];
	$obsuno=$registro[6];
	$notados=$registro[7];
	$obsdos=$registro[8];
	$notatres=$registro[9];
	$obstes=$registro[10];
	$notafinal=$registro[11];
	$obsfinal=$registro[12];
	
}

$nota="select * from alumno where cedulaal='$cedula'";
$resul=mysql_query($nota);
$nfilas1=mysql_num_rows ($resul);
if ($nfilas1>0)
{

$registro=mysql_fetch_array ($resul);
    $cedula=$registro[1];
	$pnombal =$registro[2];
	$papelal =$registro[4];
}

$nota1="select  docente.pnombredoc, docente.papellidodoc from alumno,alumdoc,docente where alumno.cedulaal='$cedula' and alumno.cedulaal=alumdoc.cedulaal and alumdoc.ceduladoc=docente.ceduladoc";
$resul1=mysql_query($nota1);
$nfilas2=mysql_num_rows ($resul1);
if ($nfilas2>0)
{

$registro=mysql_fetch_array ($resul1);
    $pnombredoc=$registro['pnombredoc'];
	$papellidodoc =$registro['papellidodoc'];
	
}

$nombres= $pnombredoc.',&nbsp;'.$papellidodoc;
if ($boton=="Guardar")
{

$nota1=$_POST['nota1'];
$ob1=$_POST['ob1'];
$nota2=$_POST['nota2'];
$ob2=$_POST['ob2'];
$nota3=$_POST['nota3'];
$ob3=$_POST['ob3'];
$nota4=$_POST['nota4'];
$ob4=$_POST['ob4'];

// 1. conectar con mysql
        $conectar=mysql_connect('localhost','root','');
        // 2. seleccionar base de datos
        mysql_select_db('escuela');



if ($notauno<>$nota1){

$uno= "update alumdoc set notauno='$nota1' where cedulaal='$cedula'";
$re= mysql_query ($uno);

}


if ($obsuno<>$ob1){

$dos="update alumdoc set obsuno='$ob1' where cedulaal='$cedula'";
$re1=mysql_query($dos);
}

if ($notados<>$nota2)
{

$tres= "update alumdoc set notados='$nota2' where cedulaal='$cedula'";
$re2= mysql_query($tres);
}

if ($obsdos<>$ob2)
{

$cuatro= "update alumdoc set obsdos='$ob2' where cedulaal='$cedula'";
$re3= mysql_query($cuatro);
}


if ($notatres<>$nota3)
{

$cinco= "update alumdoc set notatres='$nota3' where cedulaal='$cedula'";
$re4= mysql_query($cinco);
}

if ($obstes<>$ob3)
{

$seis= "update alumdoc set obstes='$ob3' where cedulaal='$cedula'";
$re5= mysql_query($seis);
}

if ($notafinal<>$nota4)
{

$siete= "update alumdoc set notafinal='$nota4' where cedulaal='$cedula'";
$re6= mysql_query($siete);
}

if ($obsfinal<>$ob4)
{

$ocho= "update alumdoc set obsfinal='$ob4' where cedulaal='$cedula'";
$re7= mysql_query($ocho);
}




?>
	<script>
alert("Datos Guardados");
//window.parent.location = "eval.php";
</script>
<?php
}//if boton

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<br />
<br />
<form action="eval.php" method="post">
<table> 
<table align="center">
<tr>
<td>C&eacute;dula:</td>
<td> <input type="text" name="cedula" value="<?php echo $cedula; ?>" /></td>
<td>Nombre:</td>
<td> <input type="text" name="nombre" value="<?php echo $pnombal; ?>" /></td>
<td>Apellido:</td>
<td> <input type="text" name="apellido" value="<?php echo $papelal; ?>" /></td>
</tr>
<tr>
<td> Grado:</td>
<td> <input type="text" name="grado" value="<?php echo $grado; ?>" /> </td>
<td> Seccion: </td>
<td> <input type="text" name="seccion" value="<?php echo $seccion?>" /></td>
<td> A&ntilde;o Escolar:</td>
<td><input type="text" name="ano_esco" value="<?php echo $anoescolar; ?>" /></td>
</tr>


<tr>
<td> Nombre del docente:</td>
<td> <input type="text" name="nombredoc" value="<?php echo $nombres; ?>" /> </td>

</tr>
</table>
<br />
<br />
<br />

<table width="594" border="1" align="center" bgcolor="#FFFFFF">
<tr>

<td colspan="3" align="center"  bgcolor="#999999"><strong> CONTROL DE NOTAS </strong></td>

</tr>

<TR>
<td width="192" bgcolor="#999999"> <strong> Lapso</strong></td>
<td width="121" bgcolor="#999999"> <strong>Notas </strong></td>
<td width="259" bgcolor="#999999"> <strong> Observaciones</strong></td>
</TR>

<tr>
<td height="31" bgcolor="#999999"><strong> 1er Lapso</strong></td>
<td align="center"> <select name="nota1">
             <option value="<?php echo $notauno; ?>"></option>
             <option>Excelente</option>
             <option>Bueno</option>
			 <option>Regular</option>
			 <option>Deficiente</option>
           </select>
</td>
<td align="center"><input type="text" name="ob1" value="<?php echo $obsuno; ?>"  size="30"/></td>
</tr>

<tr>
<td height="31" bgcolor="#999999"><strong> 2do Lapso</strong></td>
<td align="center"> <select name="nota2">
             <option value="<?php echo $notados; ?>"></option>
             <option>Excelente</option>
             <option>Bueno</option>
			 <option>Regular</option>
			 <option>Deficiente</option>
           </select></td>
<td align="center"><input type="text" name="ob2" value="<?php echo $obsdos; ?>"  size="30"/></td>
</tr>

<tr>
<td height="31" bgcolor="#999999"><strong> 3er Lapso</strong></td>
<td align="center"> <select name="nota3">
             <option value="<?php echo $notatres; ?>"></option>
             <option>Excelente</option>
             <option>Bueno</option>
			 <option>Regular</option>
			 <option>Deficiente</option>
           </select></td>
<td align="center"><input type="text" name="ob3" value="<?php echo $obstes; ?>"  size="30"/></td>
</tr>

<tr>
<td height="31" bgcolor="#999999"><strong> Nota final</strong></td>
<td align="center"> <select name="nota4">
             <option value="<?php echo $notafinal; ?>"></option>
             <option>A</option>
             <option>B</option>
			 <option>C</option>
			 <option>D</option>
           </select></td>
<td align="center"><input type="text" name="ob4" value="<?php echo $obsfinal; ?>"  size="30"/></td>
</tr>

</table>
<br />

<table align="center">
<tr>
<td> <input  type="submit" name="boton" value="Guardar" /></td>
<td> <input  type="submit" name="boton" value="Cancelar" /></td>
</tr>
</table>

</table>

</form>
</body>
</html>
