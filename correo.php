<?php
    $destinatario = "Taudiv.Records@gmail.com"
    $nombre = $_POST´["nombre"];
    $email = $_POST["email"];
    $teléfono = $_POST["teléfono"];
    $cuentame_tu_proyecto = $_POST["cuentame tu proyecto"];

    $header = "Enviado desde la página Jeanca Varela Producciones";
    $mensajeCompleto = $cuentame_tu_proyecto. "\nAtentamente: " . $nombre;

    mail($destinatario, $cuentame_tu_proyecto, $mensajeCompleto, $header, $teléfono);
    echo "<script>alert("correo enviado exitosamente")</script>";
    echo "<script>setTimeout(\"location.href="index1.html"\",1000)</script>";
?>