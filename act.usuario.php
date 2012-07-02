<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar usuario y clave </title>
</head>
<body >
<div align="center"><font color="#000000" face="normal" size="5"> Modificar Usuario y Clave:</font></div>
<br />
<?php 


$cedulaus= $_POST['cedulaus'];
$login= $_POST['login'];
$clave= $_POST['clave'];
$claven= $_POST['claven'];
$claver= $_POST['claver'];
$modi= "DISABLED";
$boton=$_POST['boton'];
$Guardar="DISABLED";
$Buscar="";
$Cancelar="";

if ($boton== "Buscar")
{
$enlance=mysql_connect("localhost","root","")or die ('problema de conexion');
$bd= "escuela";
$sql= "select login, cedulaus from usuario where cedulaus='$cedulaus'";
$resultado= mysql_db_query($bd, $sql)or die ('problemas de sentencia') ;
$nfilas= mysql_num_rows($resultado);
if ($nfilas>0)
{
    $registro= mysql_fetch_array ($resultado);
	$login= $registro['login'];
	$cedulaus= $registro['cedulaus'];
	$modi= "";
	$Guardar="";

	$Cancelar="";
	
}
else{ 

$modi= "DISABLED";
$Guardar="DISABLED";
$Cancelar="";
echo  "<div align=Center> <font color=#FF0000 size=3>Usuario no Registrado </fon></div>";

}
}

if (($boton== "Guardar") and ($claven==$claver))
{
$conectar= mysql_connect("localhost","root","");
$db=  "escuela";
$sql= "select* from usuario where clave<>'$clave'"; 
$r= mysql_db_query($db, $sql);
$nfilas= mysql_num_rows($r);
if ($nfilas>0)
{
echo  "<div align=Center> <font color=#FF0000 size=3> Clave Actual Incorrecta </fon></div>";
}
else{
$sql= "update usuario set  clave='$claven' where clave=$clave"; 
$r= mysql_db_query($db, $sql);
echo  "<div align=Center> <font color=#FF0000 size=3> Clave Actualizada </fon></div>";
}
}

else if ($claven<>$claver) {
$modi= "";
echo  "<div align=Center> <font color=#FF0000 size=3> Claves no Coinciden  </fon></div>";
$modi= "";
}



if($boton== "Cancelar"){
$cedulaus= "";
$login= "";
$clave= "";
$claven= "";
$claver= "";
}







?>

<font face="Arial, Helvetica, sans-serif" color="#000000" size="2">

<br />
<br />
<form action=""  method="post"> 
<table align="center" 
>
<br />
<tr>
<td> Cedula:</td>
<td><input type="text" name="cedulaus" value="<?php echo $cedulaus ?>" /></td><td width="68"><input type="submit" name="boton" value="Buscar" /></td></tr>
<tr>
<td width="155"><img src="imagenes/usua.jpg" width="30" height="26" /> Usuario</td> 
<td width="148"> <input type="text" name="login" value="<?php echo $login ?>" <?php echo $modi?>  /></td></tr>
<tr>
<td width="155">  <img src="imagenes/clave.jpg" width="28" height="30" /> Clave Actual:</td>
<td width="148"><input type="password" name="clave" value="" <?php echo $modi?>  /> </td>
</tr>
<tr>
<td> <img src="imagenes/clave.jpg" width="28" height="30" /> Clave Nueva:</td>
<td><input type="password" name="claven" value="" <?php echo $modi?> /></td>
</tr>

<tr>

<td> <img src="imagenes/clave.jpg" width="28" height="30" /> Repetir Clave Nueva: </td><td>
  <input type="password" name="claver" value="" <?php echo $modi?> /></td>
</tr>

</table>
<br /><br />

<table width="200" align="center">
  <tr align="center">
  <td><input type="submit" name="boton" value="Guardar" <?php echo $Guardar?> /></td><td><input type="submit" name="boton" value="Cancelar" /></td>
   
   
   
  </tr>
</table>

</form>
</body></font>

</html>
