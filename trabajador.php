
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>registro</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
</head>

<body >
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/trabajador.jpg" width="80" height="80" />Registro de trabajadores:</center></font></div>
<br>

<?php 


$ceduladoc= $_POST['ceduladoc'];
$nombre= $_POST['nombre'];
$apellidoc= $_POST['apellido'];
$cedula= $_POST['cedula'];
$Telefono= $_POST['Telefono'];
$modi= "DISABLED";
$boton=$_POST['boton'];
$Guardar="DISABLED";
$Modificar="DISABLED";
$Actualizar="DISABLED";
$Buscar="";
$Cancelar="";

if ($boton== "Guardar")
{
$conectar= mysql_connect("localhost","root","");
$db=  "";
$n= "select* from trabajador where ceduladoc='$ceduladoc'";
$r= mysql_db_query($db, $n);
$nfilas= mysql_num_rows($r);
if ($nfilas>0)
{
echo  "<div align=Center> <font color=#FF0000 size=3> El Trabajador Existe </fon></div>";
}
else{
$sql= "insert into cliente values (' ','$cedula', '$nombre','$apellido', '$cedula','$telefono')";
$resultado= mysql_db_query($db, $sql);

echo  "<div align=Center> <font color=#FF0000 size=3> Datos Guardados </fon></div>";
}
$modi= "DISABLED";
$Guardar="DISABLED";
$Modificar="DISABLED";
$Actualizar="DISABLED";
$Buscar="";
$Cancelar="";
}

if ($boton== "Buscar")
{
$enlance=mysql_connect("localhost","root","")or die ('problema de conexion');
$bd= "";
$sql= "select* from cliente where cedula='$cedula'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{
    $registro= mysql_fetch_array ($resultado);
    $cedula= $registro['cedula'];
	$nombrec= $registro['nombre'];
	$apellido= $registro['apellido'];
	$cedula= $registro['cedula'];
	$telefono= $registro['telefono'];
	$modi= "DISABLED";
	$Guardar="DISABLED";
	$Actualizar="DISABLED";
   	$Modificar="";
	$Cancelar="";
	
}
else{ 

$modi= "";
$Guardar="";
$Modificar="DISABLED";
$Cancelar="";
echo  "<div align=Center> <font color=#FF0000 size=3>Trabajador no Esta Registrado </fon></div>";

}
}
if ($boton== "Modificar"){
  $enlance=mysql_connect("localhost","root","")or die ('problema de conexion');
$bd= "";
$sql= "select* from docente where cedula='$cedula'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{  
    $registro= mysql_fetch_array ($resultado);   
    $cedula= $registro['cedula'];
	$nombre= $registro['nombre'];
	$apellido= $registro['apellido'];
	$cedula= $registro['cedula'];
	$telefono= $registro['telefono'];
	$modi= "";
	$Actualizar="";
	}
	}
	
if ($boton== "Actualizar"){
$conectar= mysql_connect("localhost","root","");
$db=  "";
$sql= "update cliente set  cedula='$cedula', nombre='$nombre', apellido='$apellido',cedula='$cedula', telefono='$telefono' where cedula='$cedula' ";
$resultado= mysql_db_query($db, $sql) or die ('problemas de sentencia');
echo  "<div align=Center> <font color=#FF0000 size=3>Datos Actualizados </fon></div>";

}

if ($boton== "Cancelar"){
$cedula= "";
$nombre="";
$apellido="";
$cedula="";
$telefono="";
}
?>

<br>
<br>
<font face="normal" color="#0000cc" size="3">
		<form action='trabajador.php' method='POST'>
		<table align ='center' width="425" height="200" >

<tr> <td width="2">&nbsp;</td>
  <td width="130">Cedula:</td>
  <td width="151"> <input type="text" name="cedula"    value="<?php echo $cedula ?>"  /></td> <td width="122" align="center"><input name="boton" type='submit'value='Buscar'></td></tr>
<tr>
 
  <td align="center">&nbsp;</td>
      <td>Nombre:</td>
  <td> <input type="text" name="nombre" value="<?php echo $nombre ?>" <?php echo $modi?> /></td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td>Apellido:</td>
  <td> <input type="text" name="apellido"         value="<?php echo $apellido ?>" <?php echo $modi?> /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>Cedula:</td>
  <td> <input type="text" name="cedula" value="<?php echo $cedula ?>" <?php echo $modi?> /></td></tr>
<tr>
  <tr>
 <td align="center">&nbsp;</td>
  <td>Telefono:</td>
  <td> <input type="text" name="telefono" value="<?php echo $telefono ?>" <?php echo $modi?> /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>celular:</td>
  <td> <input type="text" name="celular" value="<?php echo $celular ?>" <?php echo $modi?> /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>Direccion:</td>
  <td> <input type="text" name="direccion" value="<?php echo $direccion?>" <?php echo $modi?> /></td></tr>
<tr>
<td align="center">&nbsp;</td>
<td>Area:<td>
<input type="radio" name="cargo" value="mantenimiento">Mantenimiento<td><input type="radio" name="cargo" value="obrero">Obrero
</tr>
</table>
</font>

<table align ='center'>
<tr><td align ='center'><input type='submit' name="boton" value='Guardar'<?php echo $Guardar?>></td>
	<td><input name="boton" type='submit'value='Actualizar'<?php echo $Actualizar?>></td>
  <td><input name="boton" type='submit'value='Modificar'<?php echo $Modificar?>></td>
  <td><input type='submit' name="boton" value ='Cancelar'></td></tr>
 </table>
		</form>

                
</body>
</html>

