<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	<meta name="description" content="Mi sitio web" />
	
	<link rel="stylesheet" type="text/css" href="estilos.css" />
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
echo "<table border=1>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
 echo "<tr>";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
<a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>