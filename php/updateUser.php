<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "Splendid";

try {
    // Crear conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configurar el modo de error PDO para que lance excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mensaje = "";

    // Procesar los datos del formulario para actualizar un usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
       

        // Consulta SQL preparada para actualizar los datos del usuario
        $stmt = $conn->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, password = :password WHERE email = :email");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $mensaje = "Los datos del usuario se actualizaron correctamente";
        } else {
            $mensaje = "Error al actualizar los datos del usuario";
        }
    }
} catch(PDOException $e) {
    // Manejar errores de conexión
    echo "Conexión fallida: " . $e->getMessage();
}
?>

<p 
        style="color:black; font-family: 'Poppins', sans-serif; font-weight: 800; font-size:xx-large" 
        id="resultadoCrear">
      <?php if (!empty($mensaje)) { ?>
        <p style="color:black; font-family: 'Poppins', sans-serif; font-weight: 800; font-size:xx-large"><?php echo $mensaje; ?></p>
    <?php } ?>
      </p>