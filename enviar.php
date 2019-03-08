<?php

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message= $_POST['message'];
    $location = $_POST['location'];

    if ($location = "lince") {
        $to      = "sedelince@panchocavero.com";
    } else {
        $to      = "atencion.cliente@panchocavero.com";
    }
    $subject = "Sitio Web Pancho Cavero - ".$name;
    $message = "Nombre del cliente: ".$name.". Correo: ".$email.". Teléfono: ".$phone.".  Mensaje: ".$message;
    $headers = "From: $email";

    if( mail($to,$subject,$message,$headers) )
    {
        echo "Gracias! Estaremos en contacto con usted pronto.";
    }
    else
    {
        echo '<script language="javascript">alert("Ha ocurrido un error. Por favor, recargue la página.")</script>';

   }
?>

