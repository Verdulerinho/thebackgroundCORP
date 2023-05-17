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
<div class="header">
    <a href="index.html"><img class="logo" src="imgs/logo_tbc.png" alt=""></a>
    <p class="titulos" href="index.html">Registrar usuarios</p>
    <a href="index.html"><img class="logo" src="imgs/logo_tbc.png" alt=""></a>
</div>
<form method="post" action="interfazuser.php">
            <p class="texto"><input class="campos" type="text" placeholder="Usuario" name="user" /></p>
            <br>
		        <p class="texto"><input class="campos" type="text" placeholder="Contraseña" name="pass" /></p>
            <br>
            <select name="rol" class="campos" id="rol" required>
            <option value="mozo">Mozo</option>
            <option value="cocina">Cocina</option>
            <option value="cajero">Cajero</option>
            <option value="tecnico">Técnico</option>
            <option value="admin">Administrador</option>
            </select>
            <br><br>
            <button class="botoncitos" role="button" type="submit">Enviar</button>
            <br><br>
            <a href="index.html" class="botoncitos">Volver</a>
	      </form>
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
</body>
</html>