<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizzeria Bella Napoli</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top shadow-sm bg-primary text-light" data-bs-theme="dark">
            
            <div class="container">
                <!--Logo con enlace-->
                <a href="#inicio" class="navbar-brand d-flex align-items-center fw-bold fs-4">
                    <img class="navbar-brand d-flex align-items-center img-fluid" style="max-height: 60px; width: auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFx4J0omMATpSjquxyItq6vXHJIRCtWnMzirV5ZbkuZGBSa1xJCZe8Fdo&s=10">
                </a>
            
                <!--Boton hamburguesa-->
                <button class="navbar-toggler border-0"  type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Abrir navegación">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!--Menu con enlaces-->
                <div id="menuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto align-items-lg-center fw-bold">
                        <li class="nav-item"><a class="nav-link px-3" href="#inicio">Inicio</a></li>
                        <li><a class="nav-link px-3" href="#catalogo">Catálogo</a></li>
                        <li><a class="nav-link px-3" href="#armador">Arma Tu Pizza</a></li>
                        <li><a class="nav-link px-3" href="#pedidos">Pedidos</a></li>
                        <li><a class="nav-link px-3" href="#sucursales">Sucursales y contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class=" bg-dark text-light border-bottom">
            <div class="container ">
                <div class="row align-items-center g-5">
                    <h1>Pizzeria Bella Napoli</h1>
                    <div class="col-3 col-lg-3 py-7 mt-1">
                        <p><span class="badge bg-info">Contactanos</span></p>
                        <p>Tel: 2551-XXXX | Tel: 2235-XXXX</p>
                    </div>
                    <div class="col-12 col-lg-2 py-7 mt-1">
                        <p><span class="badge bg-info">Horario</span></p>
                        <p>Lun-Vie 8 Am - 5 Pm</p>         
                    </div>
                </div>   
            </div>
            
        </header>
        
        <main>

        </main>
        <footer class="py-2 mt-auto border-top bg-dark text-light" >
                     
            <div>
                <p>&copy; 2026 | Todos los derechos reservados.</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
<html>