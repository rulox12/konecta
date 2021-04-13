<div class="container">
	<h2>Actualizar Producto</h2>
	<form action="?controller=product&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $product->getId() ?>" >
		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $product->getName() ?>">
		</div>
		<div class="form-group">
			<label for="text">Referencia</label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $product->getReference(); ?>">
		</div>
        <div class="form-group">
            <label for="text">Precio</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $product->getPrice() ?>">
        </div>
        <div class="form-group">
            <label for="text">Peso</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $product->getWeight() ?>">
        </div><div class="form-group">
            <label for="text">Category</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $product->getCategory() ?>">
        </div>
        <div class="form-group">
            <label for="text">Stock</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $product->getStock() ?>">
        </div>

		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>
