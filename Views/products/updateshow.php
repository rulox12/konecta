<div class="container">
	<h2>Actualizar Producto</h2>
	<form action="?controller=product&&action=update" method="POST">
		<input type="hidden" name="id" id="id" value="<?php echo $product->getId() ?>" >
		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo $product->getName() ?>">
		</div>
		<div class="form-group">
			<label for="text">Referencia</label>
			<input type="text" name="reference" id="reference" class="form-control" value="<?php echo $product->getReference(); ?>">
		</div>
        <div class="form-group">
            <label for="text">Precio</label>
            <input type="number" name="price" id="price" class="form-control" value="<?php echo $product->getPrice() ?>">
        </div>
        <div class="form-group">
            <label for="text">Peso</label>
            <input type="number" name="weight" id="weight" class="form-control" value="<?php echo $product->getWeight() ?>">
        </div><div class="form-group">
            <label for="text">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="<?php echo $product->getCategory() ?>">
        </div>
        <div class="form-group">
            <label for="text">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="<?php echo $product->getStock() ?>">
        </div>

		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>
