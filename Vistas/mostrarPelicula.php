<div class="content">
        <h3>Detalles de la película: </h3>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Publicación</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Director</th>
                    <th>Duración</th>
                    <th>Reparto</th>
                    <th>Póster</th>
                    <th>Guardado</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pelicula as $row): ?>
                    
                    <tr>
                        <td class="custom-cell"><?php echo $row['titulo']; ?></td>
                        <td class="custom-cell"><?php echo $row['publicacion']; ?></td>
                        <td class="custom-cell"><?php echo $row['ano']; ?></td>
                        <td class="custom-cell"><?php echo $row['genero']; ?></td>
                        <td class="custom-cell"><?php echo $row['director']; ?></td>
                        <td class="custom-cell"><?php echo $row['duracion']; ?></td>
                        <td class="custom-cell"><?php echo $row['reparto']; ?></td>
                        <td class="custom-cell"><img src="<?php echo "../img/{$row['imagen']}"?>" alt="Portada"></td>
                        <td class="custom-cell"><?php echo $row['guardado']; ?></td>
                         
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table><br>

        <div class="agregar">
        
        <a class="btn btn-primary" href="<?php echo "../modificarPelicula.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas guardar esta película?')">Modificar</a>
        <a class="btn btn-primary" href="<?php echo "../borrarPelicula.php?id={$row['id']}"?>" onclick="return confirm('¿Estás seguro de que deseas borrar esta película?')">Borrar</a>
        </div>
</div>
