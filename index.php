<?php
$mysqli = new mysqli("localhost", "alumno", "password123", "proyectoweb");
if ($mysqli->connect_error) { die("Error: " . $mysqli->connect_error); }
echo "<h1>¡Desplegado con éxito desde GitHub Actions!</h1>";
echo "La conexión a MySQL funciona perfectamente.";
?>