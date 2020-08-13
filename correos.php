<?php
 $destinatario = 'ruthkeylamendoza@gmail.com';
 // esto es al correo  al que se enviara el mensaje
 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $email = $_POST['email'];
 $mensaje = $_POST['mensaje'];

 $header  ="Enviado desde la pagina de Fotografia RKey";
 $mensajeCompleto = $mensaje . "/nAtentamente: " . $nombre;


 mail($destinatario, $mensajeCompleto, $header);
 echo "<script>alert('correo enviado exitosamente')</script>";
 echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";

 ?>