<?php
// Opening PHP tag to start the PHP block

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $tipo_cliente = $_POST['primera'];  // Assuming Helado is the name of the radio button group
    $modelos = $_POST['modelos'];
    $complemento = implode(", ", $_POST['complemento']);  // Assuming complemento is an array

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulario";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO clientes (nombre, apellidos, correo, usuario, contrasena, telefono, tipo_cliente, modelos, complemento) 
            VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$contraseña', '$telefono', '$tipo_cliente', '$modelos', '$complemento')";

    // Verificar la ejecución de la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>


