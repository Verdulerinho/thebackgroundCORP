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

			include 'eliminaruser.php';
			include "capaLogicadelete.php";

			$P = new Delete();
			$P -> id = $_POST['id'];

			if(empty($_POST['id'])){
				
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
