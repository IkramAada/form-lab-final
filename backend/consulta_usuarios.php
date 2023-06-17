<?php
    include("datos_conn.php");

    // Consulta para obtener todos los usuarios sin mostrar la contraseña
    $sql = "SELECT nombre, primer_apellido, segundo_apellido, email, usuario FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los usuarios en una tabla con clases de estilo
        echo '<table class="user-table">
                <tr>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Email</th>
                    <th>Usuario</th>
                </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>'.$row["nombre"].'</td>
                    <td>'.$row["primer_apellido"].'</td>
                    <td>'.$row["segundo_apellido"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["usuario"].'</td>
                </tr>';
        }
        echo "</table>";
    } else {
        echo "No se encontraron usuarios en la base de datos.";
    }

    $conn->close();
    // Volver al formulario de registro
    echo '<br><a href="../frontend/index.html">Volver al formulario de registro</a>';
?>

<style>
    .user-table {
        border: 1px solid #dddddd;
        border-collapse: collapse;
        width: 100%;
    }

    .user-table th,
    .user-table td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .user-table tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>