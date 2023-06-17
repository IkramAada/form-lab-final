<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cursofullstack";

    // Conexión a la BD MySQL (orientada a objetos)
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
}
?>