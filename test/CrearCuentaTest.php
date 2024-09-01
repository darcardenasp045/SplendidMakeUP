<?php

use PHPUnit\Framework\TestCase;

class CrearCuentaTest extends TestCase {
    private $pdo;
    private $dbname = "splendid";

    protected function setUp(): void {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            // Crear conexión PDO
            $this->pdo = new PDO("mysql:host=$servername;dbname=$this->dbname", $username, $password);
            // Configurar el modo de error PDO para que lance excepciones
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Verificar si la conexión es exitosa
            $this->assertNotNull($this->pdo, "La conexión a la base de datos es nula.");
        } catch (PDOException $e) {
            $this->fail("Conexión fallida: " . $e->getMessage());
        }
    }

    public function testInsercionDatos() {
        $nombre = "Juan";
        $apellido = "Pérez";
        $email = "juan.perez@example.com";
        $password = "password123";

        // Consulta SQL preparada para insertar datos en la tabla 'usuarios'
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $this->assertTrue($stmt->execute(), "Error al ejecutar la inserción de datos.");

        // Verificar si el dato fue insertado correctamente
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($result, "No se encontraron datos en la base de datos.");
        $this->assertEquals($nombre, $result['nombre']);
        $this->assertEquals($apellido, $result['apellido']);
        $this->assertEquals($email, $result['email']);
    }

    public function testManejoExcepcionConexion() {
        $servername = "localhost";
        $username = "wrong_user";
        $password = "wrong_password";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$this->dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->fail("Se esperaba una excepción de conexión a la base de datos.");
        } catch (PDOException $e) {
            $this->assertStringContainsString("Access denied", $e->getMessage());
        }
    }

    protected function tearDown(): void {
        // Limpiar datos insertados en la base de datos
        $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE email = 'juan.perez@example.com'");
        $stmt->execute();
    }
}
