<?php
//LLAMANDO A LOS CAMPOS
    $nombre = $_POST["nombres"];
    $apellido = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    
//DATOS PARA EL CORREO
    $destinatario = "ien30311lalibertad@gmail.com"; 
    $asunto = "Contacto desde nuestra web";
    $contenido = "De: " . "\nNombres: " . $nombre . "\nApellidos: " .$apellido . "\nCorreo: " .$correo . "\Mensaje: " .$mensaje;

    //ENVIANDO MENSAJE

    mail($destinatario, $asunto, $contenido);
    header('Location:mensaje-de-envio.html')

?>