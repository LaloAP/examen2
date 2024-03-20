<?php

$servername = "localhost";
$username = "root";
$password = 
$database = "superheroe";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla hero
$sql_hero = "CREATE TABLE IF NOT EXISTS hero (
    id INT PRIMARY KEY,
    hero_name VARCHAR(100),
    real_name VARCHAR(255),
    gender VARCHAR(50),
    universe_id INT,
    logo_id INT,
    FOREIGN KEY (gender) REFERENCES gender(id),
    FOREIGN KEY (universe_id) REFERENCES universe(id),
    FOREIGN KEY (logo_id) REFERENCES logo(id)
)";

if ($conn->query($sql_hero) === TRUE) {
    echo "Tabla hero creada correctamente.<br>";
} else {
    echo "Error al crear la tabla hero: " . $conn->error . "<br>";
}

$conn->close();

?>