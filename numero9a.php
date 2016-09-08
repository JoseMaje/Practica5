<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Ejercicio 9</title>
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
<?php
$nom=$_POST["nom"];
$ape=$_POST["ap"];
$cor=$_POST["correo"];
$com=$_POST["com"];
echo "nombre=> $nom <br>";
echo "apellido=> $ape <br>";
echo "correo=> $cor <br>";
echo "coomentario=> $com <br>";
?>
<a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>