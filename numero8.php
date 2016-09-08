<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 8</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">                         
 </head>    
<body>
<div id="encabezado">
			<table><tr><td><img src="img/logo.png"  width="100em"></td>
			<td><marquee direction="left"><p id="titulo">UNIVERSIDAD PUBLICA DE EL ALTO</p>
			<center id="subtitulo">Ingeniería de Sistemas</center></marquee></td>
			<td><img src="img/sistemas.jpg" width="150em"></td>
			</tr></table></div><br><br><br>
<h2>PRACTICA Nº 5(PHP)</h2>    
<form method="POST" action="numero8.php">
		DIA:<input name="dia" type="text" id="dia" value=""/><br>
		MES:<input name="mes" type="text" id="mes" value=""/><br>
		AÑO:<input name="anio" type="text" id="anio" value=""/><br>
<input name="btnfecha" type="submit" id="btnfecha" value="ir  a fecha"/>	
</form><br>
<?php
$dia=$_POST["dia"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];

if ($mes=="01"){
		echo "$dia"." de enero "."$anio";
}
if ($mes=="02"){
		echo "$dia de febrero $anio";
}
if ($mes=="03"){
		echo "$dia de marzo $anio";
}
if ($mes=="04"){
		echo "$dia de abril $anio";
}
if ($mes=="05"){
		echo "$dia de mayo $anio";
}
if ($mes=="06"){
		echo "$dia de junio $anio";
}
if ($mes=="07"){
		echo "$dia de julio $anio";
}
if ($mes=="08"){
		echo "$dia de agosto $anio";
}
if ($mes=="09"){
		echo "$dia de septiembre $anio";
}
if ($mes=="10"){
		echo "$dia de octubre $anio";
}
if ($mes=="11"){
		echo "$dia de noviembre $anio";
}
if ($mes=="12"){
		echo "$dia de diciembre $anio";
}
"<BR>"
?>
<br>
 <a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>

