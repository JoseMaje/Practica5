<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 4</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
 <?php
  $filas = 9;
  $columnas = 9;
  $texto = 0;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body>      
 <div id="encabezado">
      <table><tr><td><img src="img/logo.png"  width="100em"></td>
      <td><marquee direction="left"><p id="titulo">UNIVERSIDAD PUBLICA DE EL ALTO</p>
      <center id="subtitulo">Ingeniería de Sistemas</center></marquee></td>
      <td><img src="img/sistemas.jpg" width="150em"></td>
      </tr></table></div><br><br><br>
<h2>PRACTICA Nº 5(PHP)</h2>

<table border="1">
 <?php
 for($t=0;$t<$filas;$t++){
          echo "<tr>";
      for($y=0;$y<$columnas;$y++){
         if($grey){
           $p=pow($texto,2);
              echo "<td style=padding:3px;
                 bgcolor=#000000;>".$p."</td>";
              $grey=false;
              $texto++;
         }
         else{
          $p=pow($texto,2);
              echo "<td style=padding:3px;>".$p."</td>";
              $grey=true;
              $texto++;
          }
       }
       echo "</tr>";
  }
 ?>
 </table>
 <a href="index.php"><img src="img/central.jpg" width="50px"></a>
 </body>                                                                 
 </html>