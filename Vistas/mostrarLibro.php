<div class="content">
        <h3>Libros disponibles:</h3>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Publicación</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Número de páginas</th>
                    <th>ISBN</th>
                    <th>Portada</th>
                    <th>Guardado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libro as $row): ?>
                    <tr>
                        <td class="custom-cell"><?php echo $row['titulo']; ?></td>
                        <td class="custom-cell"><?php echo $row['publicacion']; ?></td>
                        <td class="custom-cell"><?php echo $row['ano']; ?></td>
                        <td class="custom-cell"><?php echo $row['genero']; ?></td>
                        <td class="custom-cell"><?php echo $row['autor']; ?></td>
                        <td class="custom-cell"><?php echo $row['extension']; ?></td>
                        <td class="custom-cell"><?php echo $row['isbn']; ?></td>
                        <td class="custom-cell"><img src="<?php echo "../img/{$row['imagen']}"?>" alt="Portada"></td>
                        <td class="custom-cell"><?php echo $row['guardado']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table><br>

        <div class="agregar">
        <a class="btn btn-primary" href="<?php echo "../Controlador/modificarLibro.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas guardar este libro?')">Guardar libro</a>
        <a class="btn btn-primary" href="<?php echo "../Controlador/borrarLibro.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas borrar este libro?')">Borrar libro</a>
        </div>
</div>
