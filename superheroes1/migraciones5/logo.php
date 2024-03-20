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

// Consulta SQL para crear la tabla logo
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