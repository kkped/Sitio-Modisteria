<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE PRUEBA</title>
</head>
<body>
 <?php echo "ya valimos sin internet y sin energia";?> 
<form action = "http://localhost/modisteriamosquera/index.php/producto/guardar"method="post">
    <div class="card-body">

        <div id="card-body">
          <div class="row">
             <div class="form-group col-md-6">

               <label for="nombre">(*)Nombre</label>

               <input type="tex" name ="nombre" required/> 
              <!-- <label for="apellido">(*)apellido</label>-->

               <input type="tex" name ="apellido" required/> 
               <!-- <input type="tex" name="stock"/>-->

               <input type="FILE" name ="ver" class="from-control from control-user"id="examplefirstname"placeholder="imagenes">
               
               <input type="date" name ="fecha_registro" placeholder="ingrese registro" tabindex="1" required autofocus>

                <input type="submit" value ="guardar"/>
            </div>
    </div>
</form>




</body>
</html>