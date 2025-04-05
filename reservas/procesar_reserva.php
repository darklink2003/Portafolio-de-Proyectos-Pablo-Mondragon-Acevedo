<?php
include 'includes/db.php';
include 'includes/email.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y validar datos
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
    $personas = filter_input(INPUT_POST, 'personas', FILTER_VALIDATE_INT);
    $comentarios = filter_input(INPUT_POST, 'comentarios', FILTER_SANITIZE_STRING);

    // Validar datos
    if (!$nombre || !$email || !$telefono || !$fecha || !$hora || !$personas) {
        die("Por favor, complete todos los campos requeridos correctamente.");
    }

    try {
        // Insertar reserva en la base de datos
        $stmt = $conn->prepare("INSERT INTO reservas (nombre, email, telefono, fecha, hora, personas, comentarios) 
                               VALUES (:nombre, :email, :telefono, :fecha, :hora, :personas, :comentarios)");
        
        $stmt->execute([
            ':nombre' => $nombre,
            ':email' => $email,
            ':telefono' => $telefono,
            ':fecha' => $fecha,
            ':hora' => $hora,
            ':personas' => $personas,
            ':comentarios' => $comentarios
        ]);

        // Enviar email de confirmación (opcional)
        if (function_exists('enviarEmailConfirmacion')) {
            enviarEmailConfirmacion($email, $nombre, $fecha, $hora, $personas);
        }

        // Redirigir a página de confirmación
        header("Location: confirmacion.php?nombre=$nombre&fecha=$fecha&hora=$hora&personas=$personas");
        exit();
        
    } catch(PDOException $e) {
        die("Error al procesar la reserva: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>