<?php
if (!isset($_GET['nombre']) || !isset($_GET['fecha']) || !isset($_GET['hora']) || !isset($_GET['personas'])) {
    header("Location: index.php");
    exit();
}

$nombre = htmlspecialchars($_GET['nombre']);
$fecha = htmlspecialchars($_GET['fecha']);
$hora = htmlspecialchars($_GET['hora']);
$personas = htmlspecialchars($_GET['personas']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Confirmada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container confirmacion">
        <h1>¡Reserva Confirmada!</h1>
        <div class="detalles-reserva">
            <p><strong>Gracias, <?php echo $nombre; ?>!</strong></p>
            <p>Tu reserva ha sido confirmada con los siguientes detalles:</p>
            
            <ul>
                <li><strong>Fecha:</strong> <?php echo date('d/m/Y', strtotime($fecha)); ?></li>
                <li><strong>Hora:</strong> <?php echo date('H:i', strtotime($hora)); ?></li>
                <li><strong>Personas:</strong> <?php echo $personas; ?></li>
            </ul>
            
            <p>Hemos enviado un correo de confirmación a tu dirección de email.</p>
            <p>¡Esperamos verte pronto!</p>
        </div>
        
        <a href="index.php" class="btn-volver">Volver al inicio</a>
    </div>
</body>
</html>