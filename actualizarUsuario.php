<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST['id'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $rol = $_POST['rol'];

        $conexion = mysqli_connect('localhost', 'root', '', 'mibd'); 
        $consulta = "UPDATE usuarios SET `user`='$user', `pass`='$pass', `rol`='$rol' WHERE `id`=$id";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<br>";
            echo "<p class='texto'>Usuario actualizado correctamente</p>";
        } else {
            echo "<br>";
            echo "<p class='texto'>Error al actualizar el usuario: </p>" . mysqli_error($conexion);
        }
        echo "<br>";
        echo "<a href='index.html' class='botoncitos'>Volver</a>";
        
        mysqli_close($conexion);

    }
?>
</body>
</html>