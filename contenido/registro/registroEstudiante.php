<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>GuitarRock</title>
	<link rel="stylesheet" href="ruta/a/bootstrap.min.css" />
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
	<section class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					<h1>Bienvenido a TutorApp</h1>
					<p>ReOfrecemos recursos y tutores capacitados para ayudar a los estudiantes a alcanzar sus metas académicas. Las sesiones personalizadas en línea y los materiales de aprendizaje en línea están disponibles para mejorar las habilidades en varios temas. Nuestro objetivo es brindar apoyo y ayudar a los estudiantes a tener éxito en sus estudios. ¡Únete a nuestra comunidad de aprendizaje hoy mismo!</p>
					<a href="#" class="btn btn-primary btn-lg mb-3">Aprende más</a>
				</div>
				<div class="col-md-4 col-lg-4">
					<img src="https://via.placeholder.com/300x300" alt="Imagen de ejemplo" class="img-fluid">
				</div>
			</div>
		</div>
	</section>


	<section class="cta">
		<div class="container">
			<h2>¿Listo para comenzar?</h2>
			<a href="#" class="btn btn-primary btn-lg">Regístrate ahora</a>
		</div>
	</section>
</body>




<body>
	<header class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<h1>Hero Responsive con Bootstrap</h1>
					<p>Un ejemplo de cómo crear un hero totalmente responsive utilizando HTML, CSS y Bootstrap.</p>
					<a href="#" class="btn btn-primary btn-lg">Botón</a>
				</div>
				<div class="col-md-6">
					<img src="/assets/img/acdc.png" alt="Imagen" class="img-fluid">
				</div>
			</div>
		</div>
	</header>


	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="ruta-de-tu-imagen" alt="Descripción de la imagen">
			</div>
			<div class="col-md-6">
				<div class="container py-5">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<form>

								<div class="mb-3">
									<label for="nombre" class="form-label">Nombres *</label>
									<input type="text" class="form-control" id="nombre" required>
								</div>
								<div class="mb-3">
									<label for="apellido-paterno" class="form-label">Apellido paterno *</label>
									<input type="text" class="form-control" id="apellido-paterno" required>
								</div>

								<div class="mb-3">
									<label for="apellido-materno" class="form-label">Apellido materno *</label>
									<input type="text" class="form-control" id="apellido-materno" required>
								</div>

								<div class="mb-3">
									<label for="email" class="form-label">Email *</label>
									<input type="email" class="form-control" id="email" required>
								</div>

								<div class="mb-3">
									<label for="usuario" class="form-label">Nombre de usuario *</label>
									<input type="text" class="form-control" id="usuario" required>
								</div>

								<div class="mb-3">
									<label for="inputPassword" class="form-label">Contraseña</label>
									<input type="password" class="form-control" id="inputPassword" required>
								</div>

								<div class="col-md-6 mb-3">
									<label for="inputConfirmPassword" class="form-label">Confirmar contraseña</label>
									<input type="password" class="form-control" id="inputConfirmPassword" required>
								</div>

								<div class="mb-3">
									<label for="grado-academico" class="form-label">Profesión/Area</label>
									<select class="form-select" id="grado-academico">
										<option selected disabled>Seleccione su Area</option>
										<option value="bachiller">Matematicas</option>
										<option value="licenciado">Ciencias</option>
										<option value="bachiller">Lenguaje y literatura</option>
										<option value="licenciado">Idiomas</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="formFileMultiple" class="form-label">Fotografia de documento
										personal</label>
									<input class="form-control" type="file" id="formFileMultiple" multiple>
								</div>

								<div class="mb-3">
									<label for="telefono" class="form-label">Teléfono / Celular</label>
									<input type="tel" class="form-control" id="telefono">
								</div>

								<div class="mb-3">
									<label for="fecha-nacimiento" class="form-label">Fecha de nacimiento</label>
									<input type="date" class="form-control" id="fecha-nacimiento">
								</div>

								<button type="submit" class="btn btn-primary">Enviar</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>