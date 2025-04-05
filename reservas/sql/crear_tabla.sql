CREATE DATABASE IF NOT EXISTS sistema_reservas;
USE sistema_reservas;

CREATE TABLE IF NOT EXISTS reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    personas INT NOT NULL,
    comentarios TEXT,
    fecha_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);