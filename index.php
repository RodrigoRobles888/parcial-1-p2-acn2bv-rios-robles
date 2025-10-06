<?php
require_once("./utils/data.php");

$topic = isset($_GET["topic"]);

if ($topic == "alta gama"){
    $marcas = [$bmw, $mercedes, $audi, $alfaromeo, $jeep];
} else if ($topic == "media gama") {
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