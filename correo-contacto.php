<?php
    $destino= "alphadesarrollowebok@gmail.com";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $telefono = $_POST["phone"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje . "\nDesea Info sobre tus servicios ";
    mail($destino, "Nueva consulta desde Sitio Web", $contenido);
    header("Location:index.html");
?>