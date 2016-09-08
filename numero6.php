<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Ejercicio 6</title>
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
$rows = array(
array(  'nombre' => 'Luis', 'apellidos' => 'Apaza Gómez', 'telefono' => '78547851'),
array('nombre' => 'Satiago', 'apellidos' => 'Chavez Quuispe', 'telefono' => '70125412'),
array('nombre' => 'Fernanda', 'apellidos' => 'Flores Peralta', 'telefono' => '65874125'),
array('nombre' => 'Efraín', 'apellidos' => 'Mamani Poma', 'telefono' => '78547125')
);
foreach($rows as $valor) {
echo 'NOMBRE: ' . $valor['nombre'] . '<br>'; 
echo 'APELLIDOS: ' . $valor['apellidos'] . '<br>';
}
?>
 <a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>