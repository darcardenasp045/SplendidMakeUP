<?php
// Configuración de la conexión a la base de datos

$servername = "localhost";
$username = "root";
$password = "123456"; // Cambia 'tu_contraseña' por tu contraseña de la base de datos
$dbname = "Splendid"; // Cambia 'tu_base_de_datos' por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Consulta SQL para insertar datos en la tabla 'usuarios'
    $sql = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "La cuenta se creó exitosamente";
    } else {
        echo "Error al crear la cuenta: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
