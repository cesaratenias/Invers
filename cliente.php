<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>registro</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
</head>

<body >
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/cliente.jpg" width="80" height="80" />Registro de Clientes:</center></font></div>
<br />
<br>

<?php 


$cedulacli= $_POST['cedulacli'];
$nombrecli= $_POST['nombrecli'];
$apellidocli= $_POST['apellidocli'];
$Telefonocli= $_POST['Telefonocli'];
$direccioncli= $_POST['direccioncli'];
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
$db=  "inversiones";
$n= "select* from cliente where cedulacli='$cedulacli'";
$r= mysql_db_query($db, $n);
$nfilas= mysql_num_rows($r);
if ($nfilas>0)
{
echo  "<div align=Center> <font color=#FF0000 size=3> El cliente Existe </fon></div>";
}
else{
$sql= "insert into cliente values (' ','$cedulacli', '$nombrecli','$apellidocli','$cedulacli','$telefonocli','direccioncli')";
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
$bd= "inversiones";
$sql= "select* from cliente where cedulacli='$cedulacli'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{
    $registro= mysql_fetch_array ($resultado);
    $cedulacli= $registro['cedulacli'];
	$nombrecli= $registro['nombrecli'];
	$apellidocli= $registro['apellidocli'];
	$cedulacli= $registro['cedulacli'];
	$telefonocli= $registro['telefonocli'];
      $direccioncli= $registro['direccioncli'];
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
echo  "<div align=Center> <font color=#FF0000 size=3>Cliente no Esta Registrado </fon></div>";

}
}
if ($boton== "Modificar"){
  $enlance=mysql_connect("localhost","root","")or die ('problema de conexion');
$bd= "inversiones";
$sql= "select* from cliente where cedulacli='$cedulacli'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{  
    $registro= mysql_fetch_array ($resultado);   
    $cedulacli= $registro['cedulacli'];
	$nombrecli= $registro['nombrecli'];
	$apellidocli= $registro['apellidocli'];
	$cedulacli= $registro['cedulacli'];
	$telefonocli= $registro['telefonocli'];
      $direccioncli= $registro['direccioncli'];
      $modi= "";
	$Actualizar="";
	}
	}
	
if ($boton== "Actualizar"){
$conectar= mysql_connect("localhost","root","");
$db=  "inversiones";
$sql= "update cliente set  cedulacli='$cedulacli', nombrecli='$nombrecli', apellidocli='$apellidocli',cedulacli='$cedulacli', telefonocli='$telefonocli' direccioncli='$direccioncli' where cedulacli='$cedulacli' ";
$resultado= mysql_db_query($db, $sql) or die ('problemas de sentencia');
echo  "<div align=Center> <font color=#FF0000 size=3>Datos Actualizados </fon></div>";

}

if ($boton== "Cancelar"){
$cedulacli= "";
$nombrecli="";
$apellidocli="";
$cedulacli="";
$telefonocli="";
$direccioncli="";

}
?>

<br>
<br>
<font face="normal" color="#0000cc" size="3">
		<form action='cliente.php' method='POST'>
		<table align ='center' width="425" height="200" >

<tr> <td width="2">&nbsp;</td>
  <td width="130">Cedula:</td>
  <td width="151"> <input type="text" name="cedulacli"    value="<?php echo $cedulacli ?>"  /></td> <td width="122" align="center"><input name="boton" type='submit'value='Buscar'></td></tr>
<tr>
 
  <td align="center">&nbsp;</td>
      <td>Nombre:</td>
  <td> <input type="text" name="nombrecli" value="<?php echo $nombrecli ?>" <?php echo $modi?> /></td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td>Apellido:</td>
  <td> <input type="text" name="apellidocli"         value="<?php echo $apellidocli ?>" <?php echo $modi?> /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>Cedula:</td>
  <td> <input type="text" name="cedulacli" value="<?php echo $cedulacli ?>" <?php echo $modi?> /></td></tr>
<tr>
  <tr>
 <td align="center">&nbsp;</td>
  <td>Telefonocli:</td>
  <td> <input type="text" name="telefonocli" value="<?php echo $telefonocli ?>" <?php echo $modi?> /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>Direccion:</td>
  <td> <input type="text" name="direccioncli" value="<?php echo $direccioncli ?>" <?php echo $modi?> /></td></tr>
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

