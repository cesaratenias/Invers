<?php 

$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root";    // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword=""; 	  // password de acceso para el usuario de la
                      // linea anterior
$db="inversiones";    // Seleccionamos la base con la cual trabajar

$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);

if (isset($_REQUEST["login"]) && $_REQUEST["clave"]== TRUE){



$login=$_REQUEST['login'];
$clave=$_REQUEST['clave'];

			if ($login!=""){
	
			
					$sql="Select * from usuario WHERE login='$login' AND clave='$clave'";
					$Buscar=mysql_query("SELECT * FROM usuario WHERE login = '$login' AND clave = '$clave'");

					$result=mysql_query($sql,$conexion)or die ($sql .mysql_error()."" ) ;
					$num_rows = mysql_num_rows($result); //echo $num_rows; exit;
					if($num_rows>0){
							$Data= mysql_fetch_array($Buscar); //echo $Data['nivel']; exit;
							
							switch($Data['nivel']){
							
								case 1:	
									session_start();
									$_SESSION["login"]=$login;
									$_SESSION["clave"]=$clave;									
									include ("sesion.php");
									$accion="recargaadmi";
									$Mensaje="Bienvenido al Sistema..";

								break;
								case 2:
									session_start();
									include ("sesion.php");
									$accion="recargadocen";	
									$Mensaje="Bienvenido al Sistema..";
									$_SESSION["login"]=$login;
									$_SESSION["clave"]=$clave;
								break;
								case 3:
									session_start();
									include ("sesion.php");
									$accion="recargasecre";
									$Mensaje="Bienvenido al Sistema..";
									$_SESSION["login"]=$login;
									$_SESSION["clave"]=$clave;
								break;	
							}



					} elseif($num_rows == 0) {

						$accion="errorlogeo";
						$Mensaje="Usuario o Clave Incorrecta";
					}
					

}

}
?>

<script language="javascript">
function validar(form){
return(validausuario(form.login.value)&& validaclave(form.clave.value));}

function validausuario(login){
var cadena="Por Favor, Introduzca El Nombre del Usuario\n";
	if (document.fvalida.login.value.length==0){
		alert(cadena)
		document.fvalida.login.focus()
		return false;
		} else
		return true;
	}
function validaclave(clave){
 var cadena="Introduzca La Clave\n";
	if (document.fvalida.clave.value.length==0){
		alert(cadena)
		document.fvalida.clave.focus()
		return false;
		} else
		return true;
	}

	 function recargaadmi(){
     window.location="sistema.html"
		return true;
	 }
	 function recargadocen(){
     window.location="sistema2.html"
		return true;
	 }
	 function recargasecre(){
     window.location="sistema3.html"
		return true;
	 }
	 function errorlogeo(){
     window.location="ingreso.php"
		return true;
	 }


</script>
<html>
<head>
</head>
<body bgcolor="#333333">

<form name="fvalida" method="post" id="search">
<table align="center" width="900" height="48">
<tr>
<td> <img src="imagenes/fondo.jpg" width="1250" height="180" /></td>
</tr>
<tr>
<td><?php include("menu.html"); ?></td>
</tr>
</table>
<table align="center"  width="1250" height="700" bgcolor="#FFFFFF">
<tr >
<td width="326"></td><td width="25"></td>
<td width="208" height="98" align="center"><h3><font color="#000000">Ingresar</font></h3></td><td width="332"></td>
</tr>
<tr>
<td></td><td><img src="imagenes/usuario.jpg" width="25" height="25"></td><td width="208" height="44" align="center"><font color="#000000">Usuario:  
  <input  type="text" name="login"/></font></td><td></td>
<tr>
<td></td><td><img src="imagenes/contra.jpg" width="25" height="25"></td><td height="44" align="center"><font color="#000000">Clave: 
  <input  type="password" name="clave"/></font></td><td></td>
</tr>
<tr align="center">
<td></td><td></td><td><input name="submit" type="submit" class="searchbutton"  onClick="return validar(this.form);" value="Aceptar">
  <input type="reset" name="boton" value="Cancelar" /></td><td></td>
</tr>
</tr>
<tr>
<tr>
<tr>
<tr>
</tr>
</table>
</table>
<tr>
<tr height="650"><td>
 <a href="modidoc.php" target="sistema"></a></td>
</tr>
</table>


<table align="center"   background="imagenes/fondoa.jpg" width="1252">
<tr>
<td height="50" align="center"> <span><font  color="#FFFFFF">TSU Maica Rutbell,TSU Maria palacios </font></span></td>
</tr>
</table>

<script language="JavaScript" type="text/javascript">
  	<?PHP
  		if($Mensaje!=""){
  	?>
  			alert("<?PHP echo $Mensaje;?>");
  	<?PHP
			//echo $accion ; exit;
  			if ($accion=="recargaadmi"){ 
  			?>	
					recargaadmi();
  			<?PHP 
  			}
			if ($accion=="recargadocen"){
			?>
					recargadocen();
			<?PHP 			
			}
			if ($accion=="recargasecre"){
			?>
					recargasecre();
			<?PHP	
			}
			if ($accion=="errorlogeo"){
			?>
					errorlogeo();
			<?PHP	
			}
  		}

  	?>
  </script>
  
</form>
</body>
</html>
























































