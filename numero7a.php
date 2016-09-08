<?php
$n1 =$_GET['txtn1'];
$n2 =$_GET['txtn2'];
$n3 =$_GET['txtn3'];
 	$mayor =0;
 	$inter =0;
 	$menor =0;
if($n1>$n2 && $n1>$n3) {
	$mayor=$n1;
}else{
	if ($n2>$n1 && $n2>$n3) {
		$mayor=$n2;	
	}else{
		$mayor=$n3;
	}
}
if($n1<$n2 && $n1<$n3){
	$menor=$n1;
}else{
	if($n2<$n1 && $n2<$n3){
		$menor=$n2;
	}else{
		$menor=$n3;
	}
}
$inter=($n1+$n2+$n3)-($mayor+$menor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
       <title>Ejercicio 7</title>
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
echo "NUMERO1: "."$n1"."<br>";
echo "NUMERO2: "."$n2"."<br>";
echo "NUMERO3: "."$n3"."<br><BR>";
echo "el numero mayor es: "."$mayor"."<br>";
echo "el numero menor es: "."$menor"."<br>";
echo "el numero intermedio  es: "."$inter"."<br>";
?>
<a href="index.php"><img src="img/central.jpg" width="50px"></a>
 </body>                                                                 
 </html>