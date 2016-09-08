<?php
  $eq1=$_POST['equipo1'];;
  $eq2=$_POST['equipo2'];
  $eq3=$_POST['equipo3'];
  $eq4=$_POST['equipo4'];
  $eq5=$_POST['equipo5'];
  $eq6=$_POST['equipo6'];
$entrada = array("$eq1", "$eq2", "$eq3", "$eq4", "$eq5", "$eq6");
$claves_aleatorias = array_rand($entrada, 3);
?>
<table width="258" border="0">
		<tr>
			<td><h1>fixture de partidos</h1></td>
			<td> </td>
		</tr>
		<tr>
			<td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td>
			<td> vs </td>
			<td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
		</tr>
		<tr>
		<tr>
			<td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td>
			<td> vs </td>
			<td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
		</tr>
		<tr>
			<td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
			<td> vs </td>
			<td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
		</tr>
	</table>