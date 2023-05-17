<?php

function datosGuardarPersona($P){

    $conn = mysqli_connect('localhost','root','','mibd');

    if(!$conn){
        die("<p class='texto'>No hay conexión</p> " . mysqli_connect_error());
    }

    echo "<p class='texto'>Conexión con éxito</p>";
    echo "<br>";

    $id = $P -> getID();

    $sql = "DELETE FROM mibd.usuarios WHERE id = '$id';";

    if (mysqli_query($conn,$sql)){
        echo "<p class='texto'>Usuario $id eliminado con exito.</p>";
    } else {
        echo "<p class='texto'>Datos NO guardados</p>";
    }
    mysqli_close($conn);

}

?>