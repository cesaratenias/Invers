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


<br>
<br>
<font face="normal" color="#0000cc" size="3">
		<form action='cliente.php' method='POST'>
		<table align ='center' width="425" height="200" >

<tr> <td width="2">&nbsp;</td>
  <td width="130">Cedula:</td>
  <td width="151"> <input type="text" name="cedulacli"   /></td> <td width="122" align="center"><input name="boton" type='submit'value='Buscar'></td></tr>
<tr>
 
  <td align="center">&nbsp;</td>
      <td>Nombre:</td>
  <td> <input type="text" name="nombrecli" /></td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td>Apellido:</td>
  <td> <input type="text" name="apellidocli" /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>Cedula:</td>
  <td> <input type="text" name="cedulacli" /></td></tr>
<tr>
  <tr>
 <td align="center">&nbsp;</td>
  <td>Telefonocli:</td>
  <td> <input type="text" name="telefonocli" /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>Direccion:</td>
  <td> <input type="text" name="direccioncli"  /></td></tr>
</table>
</font>

<table align ='center'>
<tr><td align ='center'><input type='submit' name="boton" value='Guardar'></td>
	<td><input name="boton" type='submit'value='Actualizar'></td>
  <td><input name="boton" type='submit'value='Modificar'></td>
  <td><input type='submit' name="boton" value ='Cancelar'></td></tr>
 </table>
		</form>

                
</body>
</html>

