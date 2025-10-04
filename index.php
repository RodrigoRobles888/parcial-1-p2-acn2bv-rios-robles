<?php
$cssEstilos = "estilos";
$tituloppal =  "Consecionaria 22";
$descriptitulo = "Donde compran los locos por los autos";
$bmw_image = "https://w7.pngwing.com/pngs/538/981/png-transparent-bmw-logo-bmw-car-logo-bmw-logo-trademark-logo-graphics.png";
$mercedes_image ="https://w7.pngwing.com/pngs/129/888/png-transparent-mercedes-benz-sprinter-car-mercedes-benz-c-class-luxury-vehicle-benz-logo-angle-trademark-triangle.png";
$audi_image = "https://w7.pngwing.com/pngs/905/811/png-transparent-audi-q5-car-logo-audi-a3-audi-brand-text-vehicle-map-thumbnail.png";
$volkswagen_image ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMsxaDxFlD8rE_ah9GXtvWxxvK8sAX6WRsbQ&s";
$peugeot_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO9KO5EhBdNIBdA9xgAQ971I0KTwc6dh1IoQ&s";
$honda_image = "https://cdn.imgbin.com/24/16/1/imgbin-honda-logo-car-honda-city-honda-accord-honda-silver-honda-emblem-wAR2UeNMsA9rJw8BG1FcD6Vpj.jpg";
$alfaromeo_image = "https://w7.pngwing.com/pngs/579/799/png-transparent-alfa-romeo-romeo-car-alfa-romeo-giulia-alfa-romeo-spider-alfa-romeo-emblem-trademark-logo.png";
$jeep_image = "https://i.pinimg.com/736x/11/ee/ec/11eeec868f528be972314d1f07ac212f.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if ($cssEstilos == "bootstrap") { ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<?php } else if($cssEstilos == "estilos") {?>
		<style>
			.card img{
				width: 30%;
			}
		</style>
	<?php }	?>
	<title>CONSECIONARIA_22</title>
</head>
<body>
<h1> <?= $tituloppal; ?> </h1>
<h2> <?= $descriptitulo;?> </h2>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= $bmw_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BMW</h5>
        <p class="card-text">Examina nuestros modelos más recientes para encontrar la tecnología más inteligente, funciones innovadoras y los tipos de motores que mejor se adaptan a ti. Compara, configura y encuentra tu nuevo BMW perfecto.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
	</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $mercedes_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">MERCEDES BENZ</h5>
        <p class="card-text">Descubrí nuestros modelos más recientes. La combinación perfecta de lujo, deportividad y potencia.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $audi_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">AUDI</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $volkswagen_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">VOLKSWAGEN</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= $peugeot_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PEUGEOT</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
	</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $honda_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HONDA</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $alfaromeo_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ALFAROMEO</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= $jeep_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JEEP</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
</div>
	
</body>
</html>