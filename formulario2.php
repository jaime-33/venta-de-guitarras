!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="registrar.php" method="post" class="form-register" onsubmit="javascript:return Validar(this);">
    <form action="registrar.php" method="post" class="form-register" onsubmit="javascript:return Validar(this);">

    </form>
    
    <title>Formulario de Venta  </title>
    <link rel="stylesheet" href="fromulario.css">
    <script type="text/javascript" src="code.jquery.com_jquery-3.7.1.min.js"></script>

</head>
<body>
    <ul class="navbar">
    <li><b><a href="inicio.php"><span style="color: darkviolet">Inicio</span></a></b></li>
      
        <li><b><a href="instrumentos.php"><span style="color: blue">Productos</span></a></b></li>
        <li><b><a href="contacto.php"><span style="color: darkviolet">Contactos</span></a></b></li>
        <li><b><a href="formulario2.php"><span style="color: darkviolet">Formulario</span></a></b></li>
    </ul>
     
     <style>
      body {
        background-image: url("hivaini.jpg"); /* Cambia "ruta/a/tu/imagen.jpg" por la ruta de tu imagen de fondo */
        background-repeat: no-repeat; /* Evita que la imagen de fondo se repita */
        background-size: 1500px; /* Ajusta la imagen de fondo al tamaño de la ventana del navegador */
         }</style>
   
    <h1>Formulario de venta</h1>
    <form action="registrar.php" method="post" class="form-register" onsubmit="javascript:return Validar(this);">
     <center> <h2 class="form__titulo">Datos de Cliente</h2></center>
      <div class="contenedor-inputs">
          <input type="text" name="nombre" id="nombre" class="input-48" placeholder="Nombre" onblur="javascript:Validar();" >
            <input type="text" name="apellidos" id="apellidos" class="input-48" placeholder="Apellidos" onblur="javascript:Validar();" >
            <input type="email" name="correo" id="correo" class="input-100" placeholder="Correo" onblur="javascript:Validar();" >
            <input type="text" name="usuario" id="usuario" class="input-48" placeholder="Usuario" onblur="javascript:Validar();">
            <input type="password" name="contraseña" id="contraseña" class="input-48" placeholder="Contraseña" onblur="javascript:Validar();">
            <input type="text" name="telefono" id="telefono" class="input-100"  placeholder="Telefono" onblur="javascript:Validar();">
           
        </div>

        <div class="centered-content">
        <center><h4>Tipo</h4>
        <p><input type="radio" name="Helado" value="Helado" /> Helado </p>
<p><input type="radio" name="Ensalada de Frutas" value="Ensalada de Frutas" /> Ensalada de Frutas</p>
      </center>
        </div>
        <style>
            select {
              background-color: #f2f2f2; /* Color de fondo del desplegable */
              padding: 5px;
              border: 1px solid #ccc; /* Borde del desplegable */
              border-radius: 5px;
            }
          
            option {
              background-color: #fff; /* Color de fondo de las opciones */
              color: #333; /* Color del texto de las opciones */
            }
          </style>
          
          <style>
            .seccion {
              text-align: center;
            }
          
            h4 {
              background-color: pink;
            }
          
            select {
              background-color: pink;
              color: black; /* Cambia el color del texto a negro para que sea visible en el fondo rosa */
            }
          
            /* Estilo para los radio buttons */
            input[type="radio"] {
              background-color: pink;
              margin-right: 5px;
            }
          </style>
          </head>
          <body>
            <div class="seccion">
              <center>
                <h4>Sabor</h4>
                <select name="sabor">
                  <option value="Chocolate">Chocolate</option>
                  <option value="Frutilla">Frutilla</option>
                  <option value="Vainilla">Vainilla</option>
                  <option value="Leche">Leche</option>
                  <option value="Oreo">Oreo</option>
                  <option value="Maracuyá">Maracuyá</option>
                </select>
              </center>
            </div>
          
            <center>
              <h4>Complemento</h4>
              <div class = "seccion">
     
              <p><input type="checkbox" name="complemento[]" value="Crema" /> Crema</p>
              <p><input type="checkbox" name="complemento[]" value="Chocolate" /> Chocolate</p>
              <p><input type="checkbox" name="complemento[]" value="Chispas" /> Chispas </p>
       
      </div>
              <input type="submit" value="Registrar" class="btn-enviar">
              <p class="form__link">¿Ya tienes una cuenta? <a href="#">Ingresa aquí</a> </p>
            </center>
   

    </form>
       
        <script type="text/javascript">
        function Validador(correo){
            var tester =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-]+)\.)+([a-zA-Z0-9]{2,4})+$/;
            return tester.test(correo);
        }
        function Validar(){
            var nombre = document.getElementById('nombre').value;
            var apellidos= document.getElementById('apellidos').value;
            var correo = document.getElementById('correo').value;
            var usuario = document.getElementById('usuario').value;
            var contraseña = document.getElementById('contraseña').value;
            var telefono= document.getElementById('telefono').value;


            if(nombre==""){
                $('#alert').html('Debes ingresar un nombre').slideDown(500);
                $('#nombre').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300);
            }

            if(apellidos==""){
                $('#alert').html('Debe ingresar su apellido').slideDown(500);
                $('#apellidos').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300);
            }


            if(correo==""){
                $('#alert').html('Debes ingresar tu correo').slideDown(500);
                $('#correo').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300);
            }

            if(Validador(correo)==false){
                $('#alert').html('Ingresa un correo valido').slideDown(500);
                $('#correo').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300);
            }
            
            
        }
    </script></body></html>