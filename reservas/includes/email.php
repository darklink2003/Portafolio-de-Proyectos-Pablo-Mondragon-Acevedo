<?php
function enviarEmailConfirmacion($destinatario, $nombre, $fecha, $hora, $personas) {
    $asunto = "Confirmación de tu reserva";
    
    $mensaje = "
    <html>
    <head>
        <title>Confirmación de reserva</title>
    </head>
    <body>
        <h2>¡Gracias por tu reserva, $nombre!</h2>
        <p>Aquí están los detalles de tu reserva:</p>
        <ul>
            <li><strong>Fecha:</strong> $fecha</li>
            <li><strong>Hora:</strong> $hora</li>
            <li><strong>Personas:</strong> $personas</li>
        </ul>
        <p>¡Esperamos verte pronto!</p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: reservas@turestaurante.com\r\n";
    
    return mail($destinatario, $asunto, $mensaje, $headers);
}
?>