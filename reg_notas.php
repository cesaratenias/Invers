
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script language="javascript">
function valida_envia(){

	if (document.fvalida.codigo.value.length==0){
		alert("Tiene que escribir La codigo de la obra")
		document.fvalida.codigo.focus()
		return 0;
	}
	

	//el formulario se envia
	//alert("Muchas gracias por enviar el formulario");
	document.fvalida.submit();
}

</script>
</head>
<font face="Arial, Helvetica, sans-serif" color="#ffffff" size="3">
<body>
<br />
<div align="center"><font color="#000000" face="normal" size="5"><img src="imagenes/carro.jpg" width="80" height="80" />Control Compras:</center></font></div>
<br /><br />
<form method="post" action="eval.php" name="fvalida" id="search"  > 
<table border="0"background="images/fondo.jpg" align="center">
  
    <tr>
      <td>Codigo:</td>
      <td><INPUT type="text" name="codigo" class="textbox" size="8" onKeyUp ='this.value=this.value.toUpperCase()'>
	     </td>
    </tr>
  </tbody>
</table>




<br />
<br />

		<TABLE width="200" align="center" >
				<TR>
                <td colspan="0" align="center"><BUTTON TYPE="button" style="cursor: pointer;" value="enviar"  onclick="valida_envia()"><font>Buscar</font></BUTTON></td>

                <td colspan="0" align="center"><BUTTON TYPE="reset" style="cursor: pointer" ><font>Cancelar</font></BUTTON></td>
				</TR>
		</TABLE>
</form>

</body>
</font>
</html>
