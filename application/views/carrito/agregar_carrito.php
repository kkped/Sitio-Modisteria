<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Modisteria M.F</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/template/carrito/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="#">
    <link
        href="<?php echo base_url('fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');?>"     rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/template/carrito/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<body>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                    <tr>

                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>ACCION</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($listar as $a) { ?>
                    <tr>

                        <td>
                            <?php echo $a->Nombre; ?>
                        </td>
                        <td>
                            <?php echo $a->Descripcion; ?>
                        </td>
                        <td>
                            <?php echo $a->Precio; ?>
                        </td>

                        <td>
                            <a type='submit' class='btn btn-danger'
                                href="#"></a>
                        </td>

                        

                    </tr>


                    <?php } ?>
                </tbody> <!-- 2 -->
            </table>

            </dssiv>
        </div>

</body>

</html>