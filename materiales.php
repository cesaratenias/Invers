<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de usuario</title>
<script type="text/javascript"  src="jquery-1.3.2.js"></script>
<script type="text/javascript"  src="vanadium_es.js"></script>
<link rel="stylesheet" type="text/css" href="vanadium.css" />
<script type="text/javascript"  src="jqueryForm.js"></script>


</head>
<?php
$boton=$_POST['boton'];
$login=$_POST['login'];
$clave=$_POST['clave'];
$nombreu=$_POST['nombreu'];
$apellidou=$_POST['apellidou'];
$cargo=$_POST['cargo'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];
$cedulaus=$_POST['cedulaus'];
$nivel=$_POST['nivel'];

if ($boton=="Guardar"){

$conectar= mysql_connect('localhost','root','') or die ('problemas de conexion');
$db="escuela";
/*$sql= "insert into usuario values ('$login', '$clave', '$cedulaus', '$nombreu', '$apellidou' '$cargo', '$pregunta', '$respuesta', '$nivel')";
$resultado= mysql_db_query($db, $sql);*/
$estudiante = "INSERT INTO ``.`usuario` ( `login`, `clave` ,`cedulaus`, `nombreu`, `apellidou` , `cargo`, `pregunta`, `respuesta`, `nivel`)VALUES ('".$login."','".$clave."' ,'".$cedulaus."'  ,'".$nombreu."',  '".$apellidou."'  ,'".$cargo."' ,'".$pregunta."', '".$respuesta."' , '".$nivel."');";
$resultado = mysql_db_query($db, $estudiante);
											 
	


echo "Usuario Creado";
}
?>

<body>
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/usua.jpg" width="70" height="63" />Gestion compra:</center></font></div>
<br />
<font face="normal" color="#0000cc" size="3">
<form action="materiales.php" method="post">

<table border="0" 
<tr align="center">
<td>Materiales:</td><td> <input type="text" name="login"  class=":requiered;" /> </td> </tr><tr>
                         <input type="text" name="login"  class=":requiered;" /> </td> </tr><tr>
<td>Cedula:</td><td><input type="text" name="cedulaus" value=""/> </td>
<tr>
</tr>
<tr>
<td>Nombre:</td><td><input type="text" name="nombreu" value=""/> </td>
</tr>
<tr>
<td> Apellido:</td><td><input type="text" name="apellidou" value=""/> </td>
</tr>
<tr>
<td> Cargo:</td><td> <input type="radio" name="cargo" value="Gerente">Gerente

<input type="radio" name="cargo" value="secretaria">Secretaria

 </td>
</tr>

<tr>
<td>Nivel:</td>
<td> <select name="nivel">
<option></option>
<option>1</option>
<option>2</option>
<option>3</option>
</select></td>

</tr>

</table>
<br /><br />

<table width="200" align="center">
  <tr align="center">
  <td colspan="2" align="center"><div align="justify">
    <input type="submit" name="boton" value="Guardar" />
  </div>
    <div align="justify"></div></td>
   <td> <input type="submit" name="boton" value="Cancelar" /></td>
   
   
   
  </tr>
</table>

 
</form>
</font>
</body>
</html>
