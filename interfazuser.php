<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Personita</title>
</head>

<body>
	
	<?php

			include 'usuario.php';
			include "capaLogicauser.php";

			$P = new Usuario();
			$P -> user = $_POST['user'];
			$P -> pass = $_POST['pass'];
			$P -> rol = $_POST['rol'];

			if(empty($_POST['user']) or empty($_POST['pass']) or empty($_POST['rol'])){
				
				echo "<p class='texto'>COLOCAR TODOS LOS DATOS CORRECTAMENTE POR FAVOR</p>";
			
			}else{
				
				logicaGuardarPersona($P);
				
			}
			

			echo "<a href='index.php'><button class='botoncitos' role='button'>Volver</button></a>";
			echo "<br>";
			echo "<a action='borrar.php'><button class='botoncitos' role='button'>Clear</button></a>";
			echo "<br>";
			

	?>
  			
  </body>
</html>
