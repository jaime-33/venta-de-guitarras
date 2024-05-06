$(document).ready(function () {
    $("#miFormulario").submit(function (event) {
        var isValid = true;

        // Validar el campo de nombre
        var nombre = $("#nombre");
        var nombreError = $("#nombre").next(".error");
        if (nombre.val() === "") {
            nombreError.text("Por favor, ingrese su nombre.");
            nombreError.show();
            nombre.addClass("error");
            isValid = false;
        } else {
            nombreError.hide();
            nombre.removeClass("error");
        }

        // Validar el campo de correo electrónico
        var email = $("#email");
        var emailError = $("#email").next(".error");
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email.val())) {
            emailError.text("Por favor, ingrese una dirección de correo electrónico válida.");
            emailError.show();
            email.addClass("error");
            isValid = false;
        } else {
            emailError.hide();
            email.removeClass("error");
        }

        if (!isValid) {
            event.preventDefault(); // Evitar que el formulario se envíe si no es válido
        }
    });
});