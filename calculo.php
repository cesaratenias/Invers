<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>calculos</title>
</head>
<body >


   <?php
# Comentarios.
# Ejemplo de programacion en PHP simple
# Haciendo simples calculos entre variables predefinidas
# Por EjemploDe.Com

$PrimerValor = 10; //Comentario: Edita el numero para cambiar el primer valor
$SegundoValor = 30; //Comentario: Edita el numero para cambiar el segundo valor

//Seccion de calculos
$suma = $PrimerValor + $SegundoValor; //Sumamos
$resta = $PrimerValor - $SegundoValor; //Restamos
$multiplicacion = $PrimerValor * $SegundoValor; //Multiplicamos
$division = $PrimerValor / $SegundoValor; //Dividimos

//A continuacion mostramos las cuentas en un formato textual

echo "<h1>Formato Textual</h1>";
echo "La <strong>suma</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$suma."</strong><br/>";
echo "La <strong>resta</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$resta."</strong><br/>";
echo "La <strong>multiplicacion</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$multiplicacion."</strong><br/>";
echo "La <strong>division</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$division."</strong><br/>"; //A continuacion mostramos las cuentas en un formato matematico

echo "<h1>Formato Matematico</h1>";
echo "".$PrimerValor." + ".$SegundoValor." = <strong>".$suma."</strong><br/>";
echo "".$PrimerValor." - ".$SegundoValor." = <strong>".$resta."</strong><br/>";
echo "".$PrimerValor." * ".$SegundoValor." = <strong>".$multiplicacion."</strong><br/>";
echo "".$PrimerValor." / ".$SegundoValor." = <strong>".$division."</strong><br/>";
?>
   
   
  </tr>
</table>

</form>
</body></font>

</html>
