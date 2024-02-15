<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style.css">
        <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
        <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Lp0tW1X5F7fMEaAG5lEev0lxWyIn6fO98eMU3m0ncUExPJwQJUVJ1Ap4+btw2qYBCdzP5NP1xTjLv+oY5dTGrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        
        <script src="../js/icons.js"></script>
        <title>VideoClub</title>
    </head>
    
    <body>  
        <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
        <button id="sidebarCollapse" class="btn navbar-btn">
            <i class="fas fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?php $_SERVER["PHP_SELF"] ?> ?vista=principal">
            <h3 id="logo">VideoClub</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" id="link" href="<?php $_SERVER["PHP_SELF"] ?> ?vista=principal">
                <i class="fas fa-sign-out-alt"></i>
                Salir<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="link" href="https://github.com/sergiorc13/Multimedia">
                <i class="fab fa-github"></i>Ver proyecto en Github</a>
            </li>
            </ul>
        </div>
        </nav>

    <div class="wrapper fixed-left">
    <nav id="sidebar">
        <div class="sidebar-header">
        <h3><i class="fas fa-user"></i>Bienvenido</h3>
        </div>

        <ul class="list-unstyled components">
        <li>
            <a href="<?php $_SERVER["PHP_SELF"] ?> ?vista=peliculas"><i class="fas fa-film"></i>Películas</a>
        </li>
        <li>
            <a href="<?php $_SERVER["PHP_SELF"] ?> ?vista=libros"><i class="fas fa-book"></i>Libros</a>
        </li>
        <li>
            <a href="<?php $_SERVER["PHP_SELF"] ?> ?vista=discos"><i class="fas fa-headphones"></i>Álbumes</a>
        </li>
        </ul>
    </nav>
    </div>    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-izdeU8IYiU7a10z0NE1Z3cEXeZct3RjO+AnDUDZQO+WhXNu0Dd6XYykL29ikBo+eGJx0QGnyUuJHPJ+gGX2FLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
