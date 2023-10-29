
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4. Tablas</title>
    <h1 class="h3 mb-2 tex-gray-800"> Gestion de productos </h1>
    <p class="mb-4"> Modulo para realizar la gestion de productos</p>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Ropa de fiesta</th>
							<th>Ropa de casual</th>
							<th>Ropa de gala</th>
                            <th>ACCION</th>
						</tr>
					</thead>

					<tbody>
                         
                        <?php foreach($productos as $a) ?>
                            <tr>
							<td><?php echo $a->ropa_fiesta;?></td>
							<td><?php echo $a->ropa_casual;?></td>
							<td><?php echo $a->ropa_gala;?></td>

                            <td>
                               <input type="submit" class="btn btn-primary" value="eliminar">
                            </td>



						    </tr>

						<!-- .table-active -->
						<!-- .table-success -->
						<!-- .table-warning -->
						<!-- .table-danger -->
						<!-- .table-info -->
						<tr class="table-warning">
							<td>Ratón</td>
							<td>15</td>
							<td>100</td>
						</tr>
	
						<!-- .bg-primary -->
						<!-- .bg-success -->
						<!-- .bg-warning -->
						<!-- .bg-danger -->
						<!-- .bg-info -->
						<tr class="bg-primary text-white">
							<td>Teclado</td>
							<td>34</td>
							<td>340</td>
						</tr>
						<tr>
							<td>Pantalla</td>
							<td>10</td>
							<td>400</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>