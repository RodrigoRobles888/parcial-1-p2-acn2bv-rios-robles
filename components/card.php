<div class="card" style="width: 20rem;">
	<img src="<?= $marcas[$i]->url ?>" class="card-img-top" alt="<?= $marcas[$i]->name ?>">
	<div class="card-body">
		<h5 class="card-title"><?= $marcas[$i]->name ?></h5>
		<h6 class="categoria"><?= $marcas[$i]->categoria ?></h6>
		<p class="card-text">Vehículos disponible en nuestra concesionaria oficial.</p>
		<a href="<?= $marcas[$i]->link ?>" class="btn btn-primary">Ver Modelos</a>
</div>