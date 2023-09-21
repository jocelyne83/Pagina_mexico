<?php
// Conexión a la base de datos
$server = "localhost";
$user = "root";
$pass = "";
$db = "historiabd";
2
$cone = new mysqli($server, $user, $pass, $db);

// Verificar la conexión
if ($cone->connect_error) {
    die("Error en la conexión: " . $cone->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la tabla
$sql = "INSERT INTO  usuario(nombre, email, asunto , mensaje ) VALUES ('$nombre', '$email', '$asunto', '$mensaje' )";

if ($cone->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $cone->error;
}

// Cerrar la conexión
$cone->close();
?>


