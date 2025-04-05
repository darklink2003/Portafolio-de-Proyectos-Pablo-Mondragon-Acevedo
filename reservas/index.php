<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva en Nuestro Restaurante</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Reserva en Nuestro Restaurante</h1>
        <form action="procesar_reserva.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            
            <div class="form-group">
                <label for="fecha">Fecha de reserva:</label>
                <input type="date" id="fecha" name="fecha" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            
            <div class="form-group">
                <label for="hora">Hora de reserva:</label>
                <input type="time" id="hora" name="hora" required min="12:00" max="23:00">
            </div>
            
            <div class="form-group">
                <label for="personas">Número de personas:</label>
                <select id="personas" name="personas" required>
                    <option value="1">1 persona</option>
                    <option value="2" selected>2 personas</option>
                    <option value="3">3 personas</option>
                    <option value="4">4 personas</option>
                    <option value="5">5 personas</option>
                    <option value="6">6 personas</option>
                    <option value="7">7 personas</option>
                    <option value="8">8 personas</option>
                    <option value="9">9 personas</option>
                    <option value="10">10 personas</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="comentarios">Comentarios adicionales:</label>
                <textarea id="comentarios" name="comentarios" rows="4"></textarea>
            </div>
            
            <button type="submit" class="btn-reservar">Reservar</button>
        </form>
    </div>
</body>
</html>