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
    <p class="titulos" href="index.html">Panel de Usuarios</p>
    <a href="index.html"><img class="logo" src="imgs/logo_tbc.png" alt=""></a>
</div>

 <?php 
$conexion = mysqli_connect('localhost', 'root', '', 'mibd'); 
$consulta = "SELECT * FROM mibd.usuarios";
$resultado = mysqli_query($conexion, $consulta);


echo '<table> 
      <tr class="thead"> 
          <td>Usuario</td> 
          <td>Contraseña</td> 
          <td>Rol</td> 
          <td>ID</td> 
          <td>Editar</td>
      </tr>';

if ($resultado = $conexion->query($consulta)) {
    while ($fila = $resultado->fetch_assoc()) {
        $user = $fila["user"];
        $pass = $fila["pass"];
        $rol = $fila["rol"];
        $id = $fila["id"];

        echo '<tr> 
                  <td>'.$user.'</td> 
                  <td>'.$pass.'</td> 
                  <td>'.$rol.'</td> 
                  <td>'.$id.'</td> 
                  <td><a href="editarUsuario.php?id='.$id.'">Editar</a></td> 
              </tr>';
    }
    $resultado->free();
} 
?>
</table>
</div>
<div class="contenido">
    <br>
    <a href="index.html" class="botoncitos">Volver</a>
</div>
</body>
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