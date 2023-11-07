<div class="container">
    <div class="col-sm-6 offset-3 mt-5">
        <form method="post" id="Form"  enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre *</label>
                        <input type="text"  id="nombre" name="nombre" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion *</label>
                        <input type="text"  id="descripcion" name="descripcion" class="form-control" required >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="color" class="form-label">Color *</label>
                        <input type="text"  id="color" name="color" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio *</label>
                        <input type="number"  id="precio" name="precio" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad *</label>
                        <input type="number"  id="cantidad" name="cantidad" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad minima *</label>
                        <input type="number"  id="cantidad_minima" name="cantidad_minima" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="categorias" class="form-label">Categorias *</label>
                        <select name="categorias" id="categorias" class="form-control" required>
                            <option value="electronico">electronico</option>
                            <option value="ropa">ropa</option>
                            <option value="farmaceutico">farmaceutico</option>
                            <option value="mascotas">mascotas</option>
                            <option value="jugueteria">jugueteria</option>
                            <option value="automovilstico">automovilstico</option>
                            <option value="zapateria">zapateria</option>
                            <option value="telefonia">telefonia</option>
                            <option value="deportes">deportes</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <a href="index.php"><button type = "button" id="btnSubmit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

