<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
$usuario=admin;
$pass=12345;
$u=$_POST['usr'];
$p=$_POST['pwd'];
if($usuario ==$u && $pass ==$p)
	{	
			header("location:numero10b.php");//direcciona a pagina de bienvenida.php
	}
	else
	{
			header("location:numero10.php");	//vuenve a la pagina de logueo	
    }
?>
<a href="index.php"><img src="img/central.jpg" width="50px"></a>
</body>
</html>