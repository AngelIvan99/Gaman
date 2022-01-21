<?php
    $destinatario = 'gokunios@gmail.com';
  
    $nombre =  $_POST['nombre'];
    $email =  $_POST['email'];
    $numero =  $_POST['numero'];
    $mensaje =  $_POST['mensaje'];

    $header =  'Enviado desde la Pagina';
    $mensajeCompleto =  $mensaje .  "\nAtentamente: " .  $nombre;

    mail($destinatario, $numero, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='Contacto.html'\",1000)</script>";
?>