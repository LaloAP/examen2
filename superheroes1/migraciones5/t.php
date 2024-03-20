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

// Crear tabla hero
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

// Crear tabla universe
$sql_universe = "CREATE TABLE IF NOT EXISTS universe (
    id INT PRIMARY KEY,
    universe_name VARCHAR(50)
)";

if ($conn->query($sql_universe) === TRUE) {
    echo "Tabla universe creada correctamente.<br>";
} else {
    echo "Error al crear la tabla universe: " . $conn->error . "<br>";
}

// Crear tabla logo
$sql_logo = "CREATE TABLE IF NOT EXISTS logo (
    id INT PRIMARY KEY,
    logo_url VARCHAR(255) UNIQUE
)";

if ($conn->query($sql_logo) === TRUE) {
    echo "Tabla logo creada correctamente.<br>";
} else {
    echo "Error al crear la tabla logo: " . $conn->error . "<br>";
}

$conn->close();

?>