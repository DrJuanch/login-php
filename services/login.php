<?php
include '../connection/connection.php';
// Obtener los datos del formulario de inicio de sesión
$user = $_POST['username'];
$pass = $_POST['password'];
// Consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'";

$result = $mysqli->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
  // Inicio de sesión exitoso
  echo "Inicio de sesión exitoso";
} else {
  // Credenciales incorrectas
  echo "Credenciales incorrectas";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>