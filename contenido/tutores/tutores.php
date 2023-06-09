<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</head>
<div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/tutor1.jpg" class="d-block w-100" alt="Primer slide">
      <div class="carousel-caption text-black bg-white">
        <h3>Carlos Gomez</h3>
        <p>Educador de Matematicas con 10 años de experiencia enseñando a niños de primaria</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tutor2.jpg" class="d-block w-100" alt="Segundo slide">
      <div class="carousel-caption text-black bg-white">
        <h3>Rebecca Xiang</h3>
        <p>Educadora de Quimica con 5 años de experiencia enseñando a niños de secundaria</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tutor3.jpg" class="d-block w-100" alt="Tercer slide">
      <div class="carousel-caption text-black bg-white">
        <h3>Tabitha Jones</h3>
        <p>Educadora de Bioligia con 7 años de experiencia enseñando a niños de primaria</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>