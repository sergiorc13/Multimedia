<div class="content">
        <h3>Películas disponibles: </h3>
        <div class="agregar">
        <a class="btn btn-primary" href="<?php $_SERVER["PHP_SELF"] ?> ?vista=agregarPelicula">Agregar nueva película</a>
        </div>
       <br><br>  
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Póster</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peliculas as $row): ?>
                    <tr>
                        <td class="custom-cell"><?php echo $row['titulo']; ?></td>
                        <td class="custom-cell"><img src="<?php echo "../img/{$row['imagen']}"?>" alt="Portada"></td>
                        <td class="custom-cell"><a href="<?php $_SERVER["PHP_SELF"] ?> ?vista=mostrarPelicula&id=<?php echo $row['id']; ?>">Mostrar detalles</a></td>
                        
                    
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
