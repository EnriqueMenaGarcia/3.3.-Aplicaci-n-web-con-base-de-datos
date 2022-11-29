<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>3.3. AJAX</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>

  
	<div class="container-fluid">
		<h2 class="text-center py-3">Desarrollo para front end</h2>
		<h3 class="text-center py-3">Actividad 3.3. AJAX </h2>

	</div>

	 
	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link active" href="registro.php">Registro</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="ingreso.php">Ingreso</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="salir.php">Salir</a>
				</li>

			</ul>

		</div>

	</div>
  

	<div class="container-fluid">
		
		<div class="container py-5">

			<form>
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>

	</div>
	
</body>
</html>