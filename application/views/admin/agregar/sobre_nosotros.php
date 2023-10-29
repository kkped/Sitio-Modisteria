<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Formulario Sobre Nosotros
        </span>
        <form action = "http://localhost/modisteriamosquera/index.php/sobre_nosotros/enviar4"method="post"class="login100-form validate-form p-b-33 p-t-5">

          <div class="wrap-input100 validate-input">
            <input type="FILE" name="contacto1" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input100" type="text" name="contacto1" placeholder="contacto1" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input type="FILE" name="contacto2" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input100" type="text" name="contacto2" placeholder="contacto2" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input type="FILE" name="contacto3" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input100" type="text" name="contacto3" placeholder="contacto3" required>
          </div>

          <div class="form-row-total">
            <div class="form-row-last">
            <input class="input100" type="text" name="correo1" id="full-correo1" class="input-text"  placeholder="correo1" required>
          </div>


           <div class="form-row-last">
            <input class="input100" type="text" name="correo2" id="full-correo2" class="input-text"  placeholder="correo2" required>
          </div>

           <div class="form-row-last">
            <input class="input100" type="text" name="correo3" id="full-correo3" class="input-text"  placeholder="correo3" required>
          </div>

          <div class="form-row-last">
            <input type="FILE" name ="Nosotros" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
            <input class="input100" type="text" name="Comentarios" placeholder="Comentarios" required>
          </div> 

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Enviar
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>