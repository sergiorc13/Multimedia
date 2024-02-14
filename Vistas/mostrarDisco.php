<div class="content">
        <h3>Discos disponibles:</h3>      
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Publicación</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Grupo o Músico</th>
                    <th>Duración</th>
                    <th>ISWC</th>
                    <th>Portada</th>
                    <th>Guardado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disco as $row): ?>
                    <tr>
                        <td class="custom-cell"><?php echo $row['titulo']; ?></td>
                        <td class="custom-cell"><?php echo $row['publicacion']; ?></td>
                        <td class="custom-cell"><?php echo $row['ano']; ?></td>
                        <td class="custom-cell"><?php echo $row['genero']; ?></td>
                        <td class="custom-cell"><?php echo $row['grupoOMusico']; ?></td>
                        <td class="custom-cell"><?php echo $row['duracion']; ?></td>
                        <td class="custom-cell"><?php echo $row['iswc']; ?></td>
                        <td class="custom-cell"><img src="<?php echo "../img/{$row['imagen']}"?>" alt="Portada"></td>
                        <td class="custom-cell"><?php echo $row['guardado']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>

        <div class="agregar">
        <a class="btn btn-primary" href="<?php echo "../Controlador/modificarDisco.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas guardar este disco?')">Guardar disco</a>
        <a class="btn btn-primary" href="<?php echo "../Controlador/borrarDisco.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas borrar este disco?')">Borrar disco</a>
        </div>
</div>