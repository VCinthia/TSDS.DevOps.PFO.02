<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mysqli = new mysqli("mysql-server", "root", "passx", "pfo2");

if ($mysqli->connect_error) {
    echo "<li style='color:red;'>Error de conexión: " . $mysqli->connect_error . "</li>";
    exit;
}

$result = $mysqli->query("SELECT texto FROM mensajes");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['texto']) . "</li>";
    }
} else {
    echo "<li style='color:red;'>Error en la consulta SQL: " . $mysqli->error . "</li>";
}

$mysqli->close();
?>
