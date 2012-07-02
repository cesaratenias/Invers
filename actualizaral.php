<?php

$conectar= mysql_connect("localhost","root","");
$db=  "escuela";
$sql= "update alumno set  cedulaal='$cedulaal', pnombal='$pnombal', snombal='$snombal', papelal='$papelal', sapelal='$sapelal', sexoal='$sexoal',  fecnacal='$fecnacal', lugnacal='$lugnacal', estadoal='$estadoal', municipioal='$municipioal', sectoral='$sectoral', calleal='$calleal', casaal='$casaal', religional='$religional', literalal='$literalal', planproal='$planproal' where cedulaal='$cedulaal'";
$resultado= mysql_db_query($db, $sql) or die ('problemas de sentencia'); 

$sql1="update alumdoc set cedulaal='$cedulaal', ceduladoc='$ceduladoc', grado='$grado', seccion='$seccion', anoescolar='$anoescolar' where cedulaal='$cedulaal'";
$resultado1=mysql_db_query($db, $sql1) or die ('problemas de sentencia 1');


$sql2="update representante set cedularp='$cedularp', pnomrp='$pnomrp', snomrp='$snomrp', paperp='$paperp', saperp='$saperp', sexorp='$sexorp', estacivrp='$estacivrp', vivenirp='$vivenirp', telefrp='$telefrp', intlabrp='$intlabrp', dicctrabrp='$dicctrabrp', teleftbrp='$teleftbrp', ingmenrp='$ingmenrp'";
$resultado2=mysql_db_query($db, $sql2)or die ('problemas de sentencia 2');

$sql3="update alumrp set cedulaal='$cedulaal', cedularp='$cedularp', parentescorp='$parentescorp'";
$resultado3=mysql_db_query($db, $sql3)or die ('problemas de sentencia 3');

$sql4="update  familiar set cedulafm='$cedulafm', pnomfm='$pnomfm', snomfm='$snomfm', papefm='$papefm', sapefm='$sapefm', sexofm='$sexofm', estacivfm='$estacivfm', vivenifm='$vivenifm', teleffm='$teleffm', intlabfm='$intlabfm', dicctrabfm='$dicctrabfm', teleftbfm='$teleftbfm', ingmenfm='$ingmenfm', hijun='$hijun', hermay='$hermay', hermen='$hermen', herad='$herad', numfam='$numfam'";
$resultado3=mysql_db_query($db, $sql4)or die ('problemas de sentencia 4');

$sql5="update alumfm set cedulaal='$cedulaal', cedulafm='$cedulafm', parentescofm='$parentescofm'";
$resultado5=mysql_db_query($db, $sql5) or die ('problemas de sentencia 5');


$sql6="update condvida set cedulaal='$cedulaal', tipvivi='$tipvivi', tippiso='$tippiso', tiptec='$tiptec', tippared='$tippared', aguatub='$aguatub', aguasin='$aguasin', cloacas='$cloacas', pozo='$pozo', electri='$electri', aseourb='$aseourb'";
$resultado6=mysql_db_query($db, $sql6) or die ('problemas de sentencia 6');


$sql7="update problemafami set cedulaal='$cedulaal', alcoholismo='$alcoholismo', obsalc='$obsalc', violencia='$violencia', obsviolencia='$obsviolencia', drogas='$drogas', obsdrogas='$obsdrogas', desempleo='$desempleo', obsdesem='$obsdesem', separados='$separados', obsseparados='$obsseparados', delincuencia='$delincuencia', obsdelin='$obsdelin'";
$resultado7=mysql_db_query($db, $sql7)or die ('problemas de sentencia 7');

echo  "<div align=Center> <font color=#FF0000 size=3>Datos Actualizados </fon></div>";

?>
