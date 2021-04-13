<div class="container">
    <center><h2>Registro de Producto</h2></center>
    <form action="?controller=product&&action=save" method="POST">
        <div class="form-group">
            <label for="text">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="text">Referencia:</label>
            <input type="text" class="form-control" id="reference" name="reference">
        </div>
        <div class="form-group">
            <label for="text">Precio:</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="text">Peso:</label>
            <input type="number" class="form-control" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label for="text">Categoría:</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="form-group">
            <label for="text">Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock">
        </div>
        <div class="form-group">
            <label for="text">Ultima compra:</label>
            <input type="date" class="form-control" id="last_sale" name="last_sale">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
