<?php
// Obtener los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Crear la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consultar el usuario en la base de datos
    $query = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";
    $result = $conn->query($query);

    // Verificar si se encontró un registro
    if ($result->num_rows > 0) {
        // Obtener el rol del usuario
        $row = $result->fetch_assoc();
        $rol = $row['rol'];

        // Redirigir según el rol del usuario
        switch ($rol) {
            case 'admin':
                header("Location: admin.php");
                break;
            case 'tecnico':
                header("Location: tecnico.php");
                break;
            case 'mozo':
                header("Location: mozo.php");
                break;
            case 'cocina':
                header("Location: cocina.php");
                break;
            case 'cajero':
                header("Location: cajero.php");
                break;
            // Agrega más casos para otros roles si es necesario
            default:
                echo "Rol no válido";
        }
    } else {
        echo "Credenciales inválidas";
    }

    // Cerrar la conexión
    $conn->close();
}
?>