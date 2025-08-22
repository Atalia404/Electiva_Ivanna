<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "mascoticas";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_nac = $_POST['fecha_nacimiento'];
$telefono_fijo = $_POST['telefono_fijo'];
$prefijo_celular = $_POST['prefijo_celular'];
$telefono_celular = $_POST['telefono_celular'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];


// Encriptar la contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, direccion, fecha_nac, telefono_fijo, pref_tlf_movil, telefono_movil, usuario, contrasena,correo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $nombre, $apellido, $direccion, $fecha_nac, $telefono_fijo, $prefijo_celular, $telefono_celular, $usuario, $contrasena_hash, $correo);

if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $stmt->error;
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>