CREATE DATABASE IF NOT EXISTS login_mvc CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE login_mvc;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);