    <?php

        function datosGuardarPersona($P){

            $conn = mysqli_connect('localhost','root','','mibd');

            if(!$conn){
                die("<p class='texto'>No hay conexión</p> " . mysqli_connect_error());
            }

            echo "<p class='texto'>Conexión con éxito</p>";
            echo "<br>";

            $cedula = $P -> getCI();
            $nombre = $P -> getN();
            $apellido = $P -> getA();
            $direccion = $P -> getDir();

            $sql = "INSERT INTO personas (cedula, nombre, apellido, direccion)
            values ($cedula, '$nombre', '$apellido', '$direccion');";

            if (mysqli_query($conn,$sql)){
                echo "<p class='texto'>Datos guardados</p>";
            } else {
                echo "<p class='texto'>Datos NO guardados</p>";
            }
            mysqli_close($conn);

        }

    ?>