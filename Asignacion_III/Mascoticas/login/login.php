<?php
$servername = "localhost"; 
$username = "root";       
$password = "";           
$dbname = "mascoticas";   

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
// Incluye el archivo de conexión a la base de datos
require 'index.php';

// Inicia una sesión PHP para guardar datos del usuario
session_start();

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibe y limpia los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Prepara la consulta SQL para evitar inyecciones.
    // Buscamos el usuario por su nombre de usuario.
    $sql = "SELECT id_user, usuario, contrasena FROM usuarios WHERE usuario = ?";

    // Prepara la sentencia
    $stmt = $conn->prepare($sql);
    
    // Enlaza el parámetro 'usuario'
    $stmt->bind_param("s", $usuario);
    
    // Ejecuta la consulta
    $stmt->execute();
    
    // Obtiene el resultado de la consulta
    $resultado = $stmt->get_result();

    // Verifica si se encontró un usuario con ese nombre
    if ($resultado->num_rows === 1) {
        // Extrae la fila del resultado
        $fila = $resultado->fetch_assoc();

        // Compara la contraseña ingresada con el hash almacenado
        // password_verify() es la función correcta para esto
        if (password_verify($contrasena, $fila['contrasena'])) {
            // ¡Contraseña correcta! El usuario ha iniciado sesión.
            echo "¡Bienvenido, " . $fila['usuario'] . "! Sesión iniciada correctamente.";

            // Guarda datos importantes del usuario en la sesión
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $fila['id_user'];
            $_SESSION['usuario'] = $fila['usuario'];

            // Redirige al usuario a una página protegida o dashboard
            
            header("Location: http://localhost/Mascoticas/index.php");
        } else {
            echo "Contraseña incorrecta. Inténtalo de nuevo.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
    $stmt->close();
}
$conn->close();
?>