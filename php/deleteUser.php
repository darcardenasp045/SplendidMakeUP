<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Splendid";

try {
    // Crear conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configurar el modo de error PDO para que lance excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mensaje = "";

    // Procesar los datos del formulario para eliminar un usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];

        // Consulta SQL preparada para eliminar un usuario de la tabla 'usuarios'
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            $mensaje = "El usuario se eliminó correctamente";
        } else {
            $mensaje = "Error al eliminar el usuario";
        }
    }
} catch(PDOException $e) {
    // Manejar errores de conexión
    echo "Conexión fallida: " . $e->getMessage();
}
?>

<p style="color:black; font-family: 'Poppins', sans-serif; font-weight: 800; font-size:xx-large" id="resultadoEliminar">
    <?php if (!empty($mensaje)) { ?>
        <p style="color:black; font-family: 'Poppins', sans-serif; font-weight: 800; font-size:xx-large"><?php echo $mensaje; ?></p>
    <?php } ?>
</p>
