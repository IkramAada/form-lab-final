function validateFrom() {
    const isNameValid = validateName();
    const isEmailValid = validateEmail();
    const isPasswordValid = validatePassword();
    const isUserValid = validateUser();

    // Si todos los campos son válidos, envía el formulario
    if (isNameValid && isEmailValid && isPasswordValid && isUserValid) {
        return true;
    }
    return false;
}

function validateName() {
    const nombre = document.getElementsByName("nombre")[0].value.trim();
    const apellido1 = document.getElementsByName("p_apellido")[0].value.trim();
    const apellido2 = document.getElementsByName("s_apellido")[0].value.trim();

    const nameRegexp = /^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/;
    let valid = true;

    valid = validateField(nombre, nameRegexp, "nameMsg", "El nombre solo puede contener letras", "Rellene este campo") && valid;
    valid = validateField(apellido1, nameRegexp, "papMsg", "El primer apellido solo puede contener letras", "Rellene este campo") && valid;

    // Segundo apellido no obligatorio
    if (apellido2 && !apellido2.match(nameRegexp)) {
        document.getElementById("sapMsg").innerHTML = "El segundo apellido solo puede contener letras";
        valid = false;
    } else {
        document.getElementById("sapMsg").innerHTML = "";
    }

    return valid;
}

function validateEmail() {
    const email = document.getElementsByName("email")[0].value.trim();
    const emailRegexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return validateField(email, emailRegexp, "emailMsg", "Introduzca un email válido", "Rellene este campo");
}

function validateUser() {
    const user = document.getElementsByName("usuario")[0].value.trim();
    const userRegexp = /^[^0-9]\w+$/;
    return validateField(user, userRegexp, "userMsg", "Introduzca un usuario válido", "Rellene este campo");
}

function validatePassword() {
    const passwd = document.getElementsByName("contraseña")[0].value.trim();
    let valid = true;

    if (passwd.length < 4 || passwd.length > 8) {
        let msg = "La contraseña debe tener al menos 4 y máximo 8 caracteres";
        if (!passwd) {
            msg = "Rellene este campo";
        }
        document.getElementById("passwdMsg").innerHTML = msg;
        valid = false;
    } else {
        document.getElementById("passwdMsg").innerHTML = "";
    }

    return valid;
}

function validateField(value, regexp, errorMsgElementId, errorMsg, emptyFieldMsg) {
    if (!value) {
        document.getElementById(errorMsgElementId).innerHTML = emptyFieldMsg;
        return false;
    }

    if (!value.match(regexp)) {
        document.getElementById(errorMsgElementId).innerHTML = errorMsg;
        return false;
    }

    document.getElementById(errorMsgElementId).innerHTML = "";
    return true;
}