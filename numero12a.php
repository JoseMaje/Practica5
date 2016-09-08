<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
   <title>Ejercicio 12</title>
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
<form method="post" action="numero12a.php">
<?php
$total = "6";
$extension = ".jpg";
$carpeta = "imgdado";
$start = "1";
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>
<?php
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>
<?php
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>
<?php
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>
<?php
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?><br>
<input type="submit" value="lanzar dados">
</form> 
<a href="numero12.php"><img src="img/izquierda.png" width="50px"></a>
<a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>