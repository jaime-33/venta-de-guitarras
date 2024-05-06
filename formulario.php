<html>
<head>
     <link rel="stylesheet" type="text/css" href="musica.css"/>    
     <title>instrumentos musicales </title>

     <title>Validación de Formulario</title>
     <link rel="stylesheet" type="text/css" href="styles.css">

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Menú Desplegable</title>
     <link rel="stylesheet" href="styles.css">
</head>


<body>
  

<header>
  <nav>
      <ul class="menu">
          <li><a href="#"><h2>Inicio</h2></a></li>
          <li class="dropdown">
              <a href="#"><h2>Servicios</h2></a>
              <ul class="submenu">
                  <li><a href="#">aprende a tocar</a></li>
                  <li><a href="#">aprende las notas</a></li>
                  <li><a href="#">¿cantemos?</a></li>
              </ul>
          </li>

          <li><a href="#"><h2>Acerca de Nosotros</h2></a></li>
          <li class="dropdown">
          <a href="#"><h2>Contacto </h2></a>
          <ul class="submenu">
            <li><a href="#">76460115</a></li>
          </ul></li>
      </ul>
  </nav>

  <li  class="nav-item">
                              <script>
                      function mostrarAlerta() {
                        var opcion = confirm("Deseas ir al Login?");

                        if (opcion) {
                          // Si el usuario elige "Aceptar", redirige a la otra página
                          window.location.href ="file:///C:/Users/Liliana/Documents/jaime%20Dise%C3%B1o%20web/venta%20de%20guitarras/formulario.php";
                        } else {
                          // Si elige "Cancelar", puedes hacer algo más o simplemente no hacer nada
                        }
                      }
                    </script>

                    <a class="nav-link tm-nav-link" onclick="mostrarAlerta()">Login</a>
              </li>
</header>

    

   <!--Menu de navegacion del sitio -->
     <ul class="navbar">
           <li><a href="musica.php">Inicio</a></li>
           <li><a href="instrumentos.php" >Modelos de guitarras</a></li>
          <li><a href="modelos1.php" >Modelos 3d</a></li>
         <li><a href="informacion.php" >Mas informacion</a></li>
         <li> <a href="formulario.php"> Formulario</a></li>
         
    


     </ul>-->
    
     
<div class="cuerpo">
    
     <style>
      body {
        background-image: url("fondo2.png"); /* Cambia "ruta/a/tu/imagen.jpg" por la ruta de tu imagen de fondo */
        background-repeat: no-repeat; /* Evita que la imagen de fondo se repita */
        background-size: cover; /* Ajusta la imagen de fondo al tamaño de la ventana del navegador */
      }
         
        
         
    </style>
         
        

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
        <p><input type="radio" name="primera" value="primera" /> Primera </p>
<p><input type="radio" name="segunda" value="segunda" /> segunda</p>
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
                <h4>modelos</h4>
                <select name="modelos">
                  <option value="gibson">gibson</option>
                  <option value="fender">fender</option>
                  <option value="acustic">acustic</option>
                  <option value="distorcion">distorcion</option>
                  <option value="italik">italik</option>
                  <option value="roccker">roccker</option>
                </select>
              </center>
            </div>
          
            <center>
              <h4>Complemento</h4>
              <div class = "seccion">
     
              <p><input type="checkbox" name="complemento[]" value="efecto limpio" /> efecto limpio</p>
              <p><input type="checkbox" name="complemento[]" value="efecto distorcion" /> efecto distorcion</p>
              <p><input type="checkbox" name="complemento[]" value="silvido" /> silvido </p>
       
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
    </script>
    </body>
    
</html>