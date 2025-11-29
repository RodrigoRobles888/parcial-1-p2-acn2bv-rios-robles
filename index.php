<?php
require_once("./utils/data.php");
require_once("./components/styleSetup.php");

$topic = $_GET["topic"] ?? "";
$nombre = $_GET["nombre"] ?? "";


if ($topic == "alta gama") {
    $marcas = [$bmw, $mercedes, $audi, $alfaromeo, $jeep];
} else if ($topic == "media gama") {
    $marcas = [$volkswagen, $peugeot, $honda];
} else {
    $marcas = [$bmw, $mercedes, $audi, $volkswagen, $peugeot, $honda, $alfaromeo, $jeep];
}

if ($nombre !== "") {
    $marcas = array_filter($marcas, function ($m) use ($nombre) {
        return stripos($m->name, $nombre) !== false;
    });
}

$tituloppal = "Consecionaria R|R";
$descriptitulo = "Donde compran los fanaticos por los autos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSECIONARIA_22</title>
</head>
<header>
	<nav>
		<a href="./index.php">HOME</a>
	</nav>
</header>

<body class="ppal">
<h1 class="tituloppal"><?= $tituloppal ?></h1>
<h2 class="descripcionpag"><?= $descriptitulo; ?></h2>

<div class="container mb-4">
	<form method="GET" class="d-flex justify-content-center gap-2">
		<input type="text" name="nombre" placeholder="Buscar Marca..." value="<?= htmlspecialchars($nombre) ?>">
		<select name="topic">
			<option value="">Todas las categorías</option>
			<option value="alta gama" <?= $topic == "alta gama" ? "selected" : "" ?>>Alta Gama</option>
			<option value="media gama" <?= $topic == "media gama" ? "selected" : "" ?>>Media Gama</option>
		</select>
		<button type="submit" class="btn btn-primary">Filtrar</button>
	</form>
</div>

<div class="text-center mb-4">
	<form method="GET">
		<input type="hidden" name="tema" value="<?= $tema === 'oscuro' ? 'claro' : 'oscuro' ?>">
		<button type="submit" class="btn btn-primary">
			Modo <?= $tema === 'oscuro' ? 'claro' : 'oscuro' ?>
		</button>
	</form>
</div>

<div class="container">
	<div class="row">
	<?php if (count($marcas) == 0) { ?>
		<p class="text-center">No se encontraron resultados.</p>
	<?php } ?>
	<?php for($i = 0; $i < count($marcas); $i++) { 
		require ("./components/card.php")?>
		</div>
	<?php } ?>
	</div>
</div>
<?= $mensaje ?>
<?php require_once("./views/indexViews.php"); ?>

</body>

<footer>
	<h3>© Buenos Aires, Argentina ©</h3>
</footer>
</html>
