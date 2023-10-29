<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="http://localhost/modisteriamosquera/assets/form/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/css/util.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 ">
        <span class="login100-form-title p-b-41">
          Formulario de Personas
        </span>
        <form action = "http://localhost/modisteriamosquera/index.php/personas/enviar"method="post"class="login100-form validate-form p-b-33 p-t-5">

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="identificacion" placeholder="identificacion" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="nombre" placeholder="nombre" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="apellido" placeholder="apellido" required>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="correo" placeholder="correo" required>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="telefono" placeholder="telefono" required>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="clave" placeholder="clave" required>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="preferencia" placeholder="preferencia" required>
          </div>
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