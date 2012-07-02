<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>registro</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
</head>

<body >
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/proveedor.jpg" width="70" height="63" />Registro de Proveedor:</center></font></div>
<br />
<br>

<?php 


$cedulaprov= $_POST['cedulaprov'];
$nombreprov= $_POST['nombreprov'];
$apellidoc= $_POST['apellido'];
$rifprov= $_POST['rifprov'];
$empresaprov= $_POST['empresaprov'];
$Telefonoprov= $_POST['Telefonoprov'];
$suministraprov= $_POST['suministraprov'];
$direccionprovprov= $_POST['direccionprov'];
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
$n= "select* from proveedor where cedulaprov='$cedulaprov'";
$r= mysql_db_query($db, $n);
$nfilas= mysql_num_rows($r);
if ($nfilas>0)
{
echo  "<div align=Center> <font color=#FF0000 size=3> El Proveedor Existe </fon></div>";
}
else{
$sql= "insert into proveedor values (' ','$cedulaprov', '$nombreprov','$apellidoprov','$rifprov','$empresaprov','$telefonoprov','$suministraprov)','$direccionprov' ";
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
$sql= "select* from proveedor where cedula='$cedula'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{
    $registro= mysql_fetch_array ($resultado);
    $cedulaprov= $_POST['cedulaprov'];
$nombreprov= $_POST['nombreprov'];
$apellidoc= $_POST['apellido'];
$rifprov= $_POST['rifprov'];
$empresaprov= $_POST['empresaprov'];
$Telefonoprov= $_POST['Telefonoprov'];
$suministraprov= $_POST['suministraprov'];
$direccionprovprov= $_POST['direccionprov'];
$modi= "DISABLED";
$boton=$_POST['boton'];
$Guardar="DISABLED";
$Modificar="DISABLED";
$Actualizar="DISABLED";
$Buscar="";
$Cancelar="";
	
}
else{ 

$modi= "";
$Guardar="";
$Modificar="DISABLED";
$Cancelar="";
echo  "<div align=Center> <font color=#FF0000 size=3>Proveedor no Esta Registrado </fon></div>";

}
}
if ($boton== "Modificar"){
  $enlance=mysql_connect("localhost","root","")or die ('problema de conexion');
$bd= "inversiones";
$sql= "select* from proveedor where cedulaprov='$cedulaprov'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{  
    $registro= mysql_fetch_array ($resultado);   
$cedulaprov= $_POST['cedulaprov'];
$nombreprov= $_POST['nombreprov'];
$apellidoc= $_POST['apellido'];
$rifprov= $_POST['rifprov'];
$empresaprov= $_POST['empresaprov'];
$Telefonoprov= $_POST['Telefonoprov'];
$suministraprov= $_POST['suministraprov'];
$direccionprovprov= $_POST['direccionprov'];
$modi= "DISABLED";
$boton=$_POST['boton'];
$Guardar="DISABLED";
$Modificar="DISABLED";
$Actualizar="DISABLED";
$Buscar="";
$Cancelar="";
	}
	}
	
if ($boton== "Actualizar"){
$conectar= mysql_connect("localhost","root","");
$db=  "inversiones";
$sql= "update proveedor set ','$cedulaprov', '$nombreprov','$apellidoprov','$rifprov','$empresaprov','$telefonoprov','$suministraprov)','$direccionprov' ";

$resultado= mysql_db_query($db, $sql) or die ('problemas de sentencia');
echo  "<div align=Center> <font color=#FF0000 size=3>Datos Actualizados </fon></div>";

}

if ($boton== "Cancelar"){
$cedulaprov= "";
$nombreprov="";
$apellidoprov="";
$rifprov="";
$empresaprov="";
$telefonoprov="";
$suministraprov="";
$direccionprov="";
}
?>

<br>
<br>
<font face="normal" color="#0000cc" size="3">
		<form action='proveedor.php' method='POST'>
		<table align ='center' width="425" height="200" >

<tr> <td width="2">&nbsp;</td>
  <td width="130">Cedula:</td>
  <td width="151"> <input type="text" name="cedulaprov"    value="<?php echo $cedulaprov ?>"  /></td> <td width="122" align="center"><input name="boton" type='submit'value='Buscar'></td></tr>
<tr>
 
  <td align="center">&nbsp;</td>
      <td>Nombre:</td>
  <td> <input type="text" name="nombreprov" value="<?php echo $nombreprov ?>" <?php echo $modi?> /></td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td>Apellido:</td>
  <td> <input type="text" name="apellidoprov"         value="<?php echo $apellidoprov ?>" <?php echo $modi?> /></td></tr>
<tr>
 <tr>
 <td align="center">&nbsp;</td>
  <td>Rif:</td>
  <td> <input type="text" name="rifprov" value="<?php echo $rifprov ?>" <?php echo $modi?> /></td></tr>
 <tr>
 <td align="center">&nbsp;</td>
  <td>Empresa:</td>
  <td> <input type="text" name="empresaprov" value="<?php echo $empresaprov ?>" <?php echo $modi?> /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>Telefono:</td>
  <td> <input type="text" name="telefonoprov" value="<?php echo $telefonoprov ?>" <?php echo $modi?> /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>suministra:</td>
  <td> <input type="text" name="suministraprov" value="<?php echo $suministraprov ?>" <?php echo $modi?> /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>Direccion:</td>
  <td> <input type="text" name="direccionprov" value="<?php echo $direccionprov ?>" <?php echo $modi?> /></td></tr>
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

