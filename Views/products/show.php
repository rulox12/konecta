

<div class="container">
	<h2>Lista Productos</h2>
	<form class="form-inline" action="?controller=product&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Referencia</th>
					<th>Precio</th>
					<th>Peso</th>
					<th>Categoria</th>
					<th>Stock</th>
				</tr>
				<tbody>
					<?php foreach ($productList as $product) {?>
					<tr>
						<td> <a href="?controller=product&&action=updateshow&&productId=<?php  echo $product->getId()?>"> <?php echo $product->getId(); ?></a> </td>
						<td><?php echo $product->getName(); ?></td>
						<td><?php echo $product->getReference(); ?></td>
						<td><?php echo $product->getPrice(); ?>
						<td><?php echo $product->getWeight(); ?>
						<td><?php echo $product->getCategory(); ?>
						<td><?php echo $product->getStock(); ?>
						<td><a href="?controller=product&&action=delete&&id=<?php echo $product->getId() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>

</div>
