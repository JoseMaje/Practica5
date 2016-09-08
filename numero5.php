<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Ejercicio 5</title>
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
if ($gestor = opendir('img'))
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor))) 
 {
 		if ($archivo!="." && $archivo!="..")
 		{
 			if ($i==4)
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=img/$archivo><img src=img/$archivo width='200px'></a>";
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);
}
?>
 <a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>