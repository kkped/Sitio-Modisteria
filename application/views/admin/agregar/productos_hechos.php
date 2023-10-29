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
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/css/util.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/modisteriamosquera/assets/form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 ">
        <span class="login100-form-title p-b-41">
          Formulario Productos Hechos
        </span>
        <form action = "http://localhost/modisteriamosquera/index.php/productos_hechos/enviar2"method="post"class="login100-form validate-form p-b-33 p-t-5">

          <div class="wrap-input90 validate-input">
            <input type="FILE" name="vestidos" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="vestidos" placeholder="vestidos" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="pantalones" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="pantalones" placeholder="pantalones" required>
            <span class="focus-input" data-placeholder="&#xe82a;"></span>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="conjuntos" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="conjuntos" placeholder="conjuntos" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="blusas" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="blusas" placeholder="blusas" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="mochos" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="mochos" placeholder="mochos" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="short" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="short" placeholder="short" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="kimono" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="kimono" placeholder="kimono" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="enterizos" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="enterizos" placeholder="enterizos" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="uniformes" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="uniformes" placeholder="uniformes" required>
          </div>


           <div class="wrap-input90 validate-input">
            <input type="FILE" name="crotop" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="crotop" placeholder="crotop" required>
          </div>

           <div class="wrap-input90 validate-input">
            <input type="FILE" name="ropadeportiva" class="from-control from control-user" id="examplefirstname" placeholder="imagenes">

            <input class="input90" type="text" name="ropadeportiva" placeholder="ropa de portiva" required>
          </div>

          <div class="form-row-last">
            <input type="FILE" name ="sueteres" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
             <input class="input90" type="text" name="sueteres" placeholder="sueteres" required>

          </div> 

           <div class="form-row-last">
            <input type="FILE" name ="camisas" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
             <input class="input90" type="text" name="camisas" placeholder="camisas" required>

          </div> 

           <div class="form-row-last">
            <input type="FILE" name ="chaqueta" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
             <input class="input90" type="text" name="chaqueta" placeholder="chaqueta" required>

          </div> 

           <div class="form-row-last">
            <input type="FILE" name ="blazer" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
             <input class="input90" type="text" name="blazer" placeholder="blazer" required>

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