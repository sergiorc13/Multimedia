<div class="content">
    <h3 class="mb-4">Agregar una nueva película:</h3>

    <form method="post" action="../Controlador/controlPeliculas.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="mb-3">
            <label for="publicacion" class="form-label">Publicación:</label>
            <input type="date" class="form-control" id="publicacion" name="publicacion" required>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Año:</label>
            <input type="number" class="form-control" id="ano" name="ano" required>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director:</label>
            <input type="text" class="form-control" id="director" name="director" required>
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración:</label>
            <input type="text" class="form-control" id="duracion" name="duracion" required>
        </div>

        <div class="mb-3">
            <label for="reparto" class="form-label">Reparto:</label>
            <input type="text" class="form-control" id="reparto" name="reparto" required>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="text" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <div class="agregar">
        <button type="submit" class="btn btn-primary" name="submit">Agregar Película</button>
        </div>
       
    </form>
</div>
