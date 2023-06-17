<?php
    include("datos_conn.php");
    include("validacion_datos.php");
    
    if ($_POST){

        // Obtención de los datos del formulario
        $nombre = limpiarDatos($_POST['nombre']);
        $apellido1 = limpiarDatos($_POST['p_apellido']);
        $apellido2 = limpiarDatos($_POST['s_apellido']);
        $email = limpiarDatos($_POST['email']);    
        $usuario = limpiarDatos($_POST['usuario']);    
        $contraseña = limpiarDatos($_POST['contraseña']);        

        if (validarDatos($nombre, $apellido1, $apellido2, $email, $usuario, $contraseña)){

            // Comprobación de la existencia del mismo email en la BD
            $query = "SELECT COUNT(*) as count FROM usuarios WHERE email = '" . $conn->real_escape_string($email) . "'";
            if ($result = $conn->query($query)){

                $row = $result->fetch_assoc();
                $count = $row['count'];

                if ($count > 0){
                    echo 'El correo electrónico ya existe en la base de datos.';
                } else {

                    // Inserción de los datos en la base de datos
                    $sql = "INSERT INTO usuarios (nombre, primer_apellido, segundo_apellido, email, usuario, contraseña) 
                    VALUES ('$nombre','$apellido1', '$apellido2', '$email', '$usuario', '$contraseña')";

                    if ($conn->query($sql)) {
                        echo 'Registro completado con éxito.';
                        echo '<br><a href="consulta_usuarios.php">Consulta de usuarios</a>';
                    } else {
                        echo 'Error al insertar los datos: ' . $conn->error;
                    }
                }

            } else {
                echo 'No se ha podido comprobar la existencia del email en la base de datos';
            }
            
            // Cierre de la conexión
            $conn->close();
            
        } else {
            echo 'Algunos de los datos introducidos son inválidos.';
        }
        echo '<br><a href="../frontend/index.html">Volver al formulario de registro</a>';
    }
?>