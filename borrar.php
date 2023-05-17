<?php

    include 'persona.php';    

    function borrarBD($P){

        $conn = mysqli_connect('localhost','root','','mibd');

        $clear = "DELETE FROM personas;";
    
        if(!$conn){
            die("<p class='texto'>No hay conexión</p> " . mysqli_connect_error());
        }

        if (mysqli_query($conn,$clear)){
            echo "<p class='texto'>Datos borrados con éxito</p>";
        } else {
            echo "<p class='texto'>NO se borraron los datos</p>";
        }
        mysqli_close($conn);

    }


?>