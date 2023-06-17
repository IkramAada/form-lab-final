<?php
    // Función para limpiar y validar los datos ingresados
    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    // Función para validar los datos del formulario
    function validarDatos($nombre, $apellido1, $apellido2, $email, $usuario, $contraseña) {
        $nameRegexp = "/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/";
        $usernameRegexp = "/^[^0-9]\w+$/";

        // Validación del nombre
        if (empty($nombre) || !preg_match($nameRegexp, $nombre)) {
            return false;
        }

        // Validación del primer apellido
        if (empty($apellido1) || !preg_match($nameRegexp, $apellido1)) {
            return false;
        }

        // Validación del segundo apellido
        if (!empty($apellido2) && !preg_match($nameRegexp, $apellido2)) {
            return false;
        }

        // Validación del email
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // Validación del usuario
        if (empty($usuario) || !preg_match($usernameRegexp, $usuario)) {
            return false;
        }

        // Validación de la contraseña
        if (empty($contraseña) || strlen($contraseña) < 4 || strlen($contraseña) > 8) {
            return false;
        }

        return true;
    }
?>