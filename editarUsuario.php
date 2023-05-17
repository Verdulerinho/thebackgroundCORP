<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <a href="index.html"><img class="logo" src="imgs/logo_tbc.png" alt=""></a>
    <p class="titulos" href="index.html">Panel de Usuarios</p>
    <a href="index.html"><img class="logo" src="imgs/logo_tbc.png" alt=""></a>
</div>
<br><br>
<?php

    include 'persona.php';
    include "capaLogica.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "ID de usuario no proporcionado";
        exit;
    }

    $conexion = mysqli_connect('localhost', 'root', '', 'mibd'); 
    $consulta = "SELECT * FROM usuarios WHERE id=$id";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $user = $fila["user"];
        $pass = $fila["pass"];
        $rol = $fila["rol"];
        $id = $fila["id"];

        echo '
        <form action="actualizarUsuario.php" method="post">
        
            <label class="texto" for="user">Usuario:</label>
            <input class="campos" type="text" id="user" name="user" value="' . $user . '">

            <label class="texto" for="pass">Contraseña:</label>
            <input class="campos" type="text" id="pass" name="pass" value="' . $pass . '">

            <label class="texto" for="rol">Rol:</label>
            <select name="rol" class="campos" id="rol">
                <option value="mozo">Mozo</option>
                <option value="cocina">Cocina</option>
                <option value="cajero">Cajero</option>
                <option value="tecnico">Técnico</option>
                <option value="admin">Administrador</option>
            </select><br><br>

            <label class="texto" for="id">ID:</label>
            <input class="campos" type="number" name="id" value="' . $id . '">

            <button class="botoncitos" role="button" type="submit" value="Actualizar">Actualizar</button>
        </form>';
    } else {
        echo "No se encontró el usuario.";
    }
?>
</body>
<br>
<footer>
  <div class="footer">
    <a href="index.html"><img src="imgs/logo_footer.png" class="logofooter" alt=""></a>
    <div class="pRedes">
        <a href="#" target="_blank">
            <img src="imgs/ig.svg" class="redes" alt="Instagram">
        </a>
        <a href="#" target="_blank">
            <img src="imgs/fb.svg" class="redes" alt="Facebook">
        </a>
        <a href="#" target="_blank">
            <img src="imgs/tw.svg" class="redes" alt="Twitter">
        </a>
    </div>
</div>
<div class="footer2">
    <div class="creditos2">
        <a href="https://www.instagram.com/juanpaxl6" class="creditos2" target="blank">© The Background GROUP®™ 2023 // Todos los derechos reservados</a>
    </div>
</div>
</footer>
</html>
