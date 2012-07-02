
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>registro</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
</head>

<body >
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/trabajador.jpg" width="80" height="80" />Registro de trabajadores:</center></font></div>
<br>


<br>
<br>
<font face="normal" color="#0000cc" size="3">
		<form action='trabajador.php' method='POST'>
		<table align ='center' width="425" height="200" >

<tr> <td width="2">&nbsp;</td>
  <td width="130">Cedula:</td>
  <td width="151"> <input type="text" name="cedula"   /></td> <td width="122" align="center"><input name="boton" type='submit'value='Buscar'></td></tr>
<tr>
 
  <td align="center">&nbsp;</td>
      <td>Nombre:</td>
  <td> <input type="text" name="nombre" /></td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td>Apellido:</td>
  <td> <input type="text" name="apellido" /></td></tr>
<tr>
 <td align="center">&nbsp;</td>
  <td>Cedula:</td>
  <td> <input type="text" name="cedula"  /></td></tr>
<tr>
  <tr>
 <td align="center">&nbsp;</td>
  <td>Telefono:</td>
  <td> <input type="text" name="telefono" /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>celular:</td>
  <td> <input type="text" name="celular"  /></td></tr>
<tr>
<td align="center">&nbsp;</td>
  <td>Direccion:</td>
  <td> <input type="text" name="direccion" /></td></tr>
<tr>
<td align="center">&nbsp;</td>
<td>Area:<td>
<input type="radio" name="cargo" value="mantenimiento">Mantenimiento<td><input type="radio" name="cargo" value="obrero">Obrero
</tr>
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

