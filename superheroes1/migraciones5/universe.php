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

// Consulta SQL para crear la tabla universe
$sql_universe = "CREATE TABLE IF NOT EXISTS universe (
    id INT PRIMARY KEY,
    universe_name VARCHAR(50)
)";

if ($conn->query($sql_universe) === TRUE) {
    echo "Tabla universe creada correctamente.<br>";
} else {
    echo "Error al crear la tabla universe: " . $conn->error . "<br>";
}

$conn->close();

?>