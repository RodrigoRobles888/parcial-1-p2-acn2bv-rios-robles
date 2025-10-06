<?php

$topic = isset($_GET["topic"]);
$bmw = (object) [
	'name' => 'BMW',
	'url' => 'https://w7.pngwing.com/pngs/538/981/png-transparent-bmw-logo-bmw-car-logo-bmw-logo-trademark-logo-graphics.png',
	'link' => 'https://www.bmw.com.ar/es/all-models.html'
];
$mercedes = (object) [
	'name' => 'MERCEDES BENZ',
	'url' => 'https://w7.pngwing.com/pngs/129/888/png-transparent-mercedes-benz-sprinter-car-mercedes-benz-c-class-luxury-vehicle-benz-logo-angle-trademark-triangle.png',
	'link' => 'https://www.mercedes-benz.com.ar/passengercars/models.html?group=all&subgroup=see-all&filters='
];
$audi = (object) [
	'name' => 'AUDI',
	'url' => 'https://w7.pngwing.com/pngs/905/811/png-transparent-audi-q5-car-logo-audi-a3-audi-brand-text-vehicle-map-thumbnail.png',
	'link' => 'https://www.audi.com.ar/es/modelos/'
];
$volkswagen = (object) [
	'name' => 'VOLKSWAGEN',
	'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMsxaDxFlD8rE_ah9GXtvWxxvK8sAX6WRsbQ&s',
	'link' => 'https://www.volkswagen.com.ar/es/modelos.html'
];
$peugeot = (object) [
	'name' => 'PEUGEOT',
	'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO9KO5EhBdNIBdA9xgAQ971I0KTwc6dh1IoQ&s',
	'link' => 'https://www.peugeot.com.ar/modelos/peugeot-gama.html'
];
$honda = (object) [
	'name' => 'HONDA',
	'url' => 'https://cdn.imgbin.com/24/16/1/imgbin-honda-logo-car-honda-city-honda-accord-honda-silver-honda-emblem-wAR2UeNMsA9rJw8BG1FcD6Vpj.jpg',
	'link' => 'https://autos.honda.com.ar/'
];
$alfaromeo = (object) [
	'name' => 'ALFAROMEO',
	'url' => 'https://w7.pngwing.com/pngs/579/799/png-transparent-alfa-romeo-romeo-car-alfa-romeo-giulia-alfa-romeo-spider-alfa-romeo-emblem-trademark-logo.png',
	'link' => 'https://www.alfaromeo.com.ar/'
];
$jeep = (object) [
	'name' => 'JEEP',
	'url' => 'https://i.pinimg.com/736x/11/ee/ec/11eeec868f528be972314d1f07ac212f.jpg',
	'link' => 'https://www.jeep.com.ar/'
];

if ($topic == "Alta Gama"){
    $marcas = [$bmw, $mercedes, $audi, $alfaromeo, $jeep];
} else if ($topic == "Media Gama") {
    $marcas = [$volkswagen, $peugeot, $honda]; 
} else {
    $marcas = [$bmw, $mercedes, $audi, $volkswagen, $peugeot, $honda, $alfaromeo, $jeep];
}

$tituloppal =  "Consecionaria R|R";
$descriptitulo = "Donde compran los fanaticos por los autos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSECIONARIA_22</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<style> 
	    .ppal{
			background-color: grey;
		}
		header{
        background-color: rgba(20, 20, 20, 1); 
		color: white;
        text-align: center;
        font-size: 20px; 
        padding: 15px;
		} 
		header nav{
		margin: 10px; 
        text-decoration: none; 
        color: black; 
        font-weight: 600; 
        padding: 4px 7px;
        border-radius: 5px;
        position: relative;
        transition: all 0.1s ease;
	    }
	    header nav a:hover {
        background-color: rgba(0, 0, 0, 0.1);
        color: rgba(255, 230, 230, 0.321);
        transform: scale(1.5);
        }
		.tituloppal{
			text-align: center;
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			font-weight: 1000;
		}
		.descripcionpag{
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			text-align: center;
			text-decoration: overline;
		
		}
		.container {
		border: 2%;
	    }
		.row{
			align-items: center;
			display: flex;
			flex-wrap: wrap;
		}
		.card-title{
			text-align: center;
			font-weight: 950;
		}
		.card-img-top{
			width: 100%;
		}
		.card-body a{
			background-color: black;
		}
		.card-body a:hover {
        background-color: rgba(0, 0, 0, 0.1);
        color: black;
        transform: scale(1.0);
		border-color: black;
        }
		footer{
		    background-color: rgba(20, 20, 20, 1); 
		    color: white;
            text-align: center;
            font-size: 20px; 
            padding: 15px;
		}
	</style>
	
</head>
<header>
	<nav>
<a href="./index.php">HOME</a>
<a href="">CONTACTO</a>
</nav>
</header>

<body class="ppal">
<h1 class="tituloppal"> <?= $tituloppal ?></h1>
<h2 class="descripcionpag"> <?= $descriptitulo;?> </h2>
<div class="container">
<div class="row">
<?php for($i = 0; $i < count($marcas); $i++) { ?>
<div class="card" style="width: 20rem;">
  <img src="<?= $marcas[$i] -> url ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $marcas[$i] -> name ?> </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="<?= $marcas[$i] -> link ?>" class="btn btn-primary">Ver Modelos</a>
  </div>
</div>
<?php } ?>
</div></div>
	
</body>

<footer>
	<h3> © Buenos Aires, Argentina ©</h3>
</footer>
</html>