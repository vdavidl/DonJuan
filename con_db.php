<?php
$servername = "localhost";
$database = "restaurante";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
   // Establecer el modo de error de PDO en excepción
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Conexión exitosa"; 
} catch(PDOException $e) {
   echo "Conexión fallida: " . $e->getMessage();
}
?>
