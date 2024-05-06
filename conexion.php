
<?php
<form action="registrar.php" method="post" class="form-register" onsubmit="javascript:return Validar(this);">

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CONTRASENA', '');
define('BASE_DE_DATOS', 'formulario');

// Create connection
$conn = new mysqli(SERVIDOR, USUARIO, CONTRASENA, BASE_DE_DATOS);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>