<?php

function datosGuardarPersona($P){

    $conn = mysqli_connect('localhost','root','','mibd');

    if(!$conn){
        die("<p class='texto'>No hay conexión</p> " . mysqli_connect_error());
    }

    echo "<p class='texto'>Conexión con éxito</p>";
    echo "<br>";

    $user = $P -> getUser();
    $pass = $P -> getPass();
    $rol = $P -> getRol();

    $sql = "INSERT INTO usuarios (user, pass, rol)
    values ('$user', '$pass','$rol');";

    if (mysqli_query($conn,$sql)){
        echo "<p class='texto'>Datos guardados</p>";
    } else {
        echo "<p class='texto'>Datos NO guardados</p>";
    }
    mysqli_close($conn);

}

?>