<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería Bella Napoli | Honduras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link href="CSS/estilo.css" rel="stylesheet">
     
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm py-3 bg-primary">
        <div class="container">
            
            <a href="#inicio" class="navbar-brand d-flex align-items-center fw-bold fs-4">
                <i class="bi bi-water" ></i>
                <img src="img/Logo1.png" alt="Logo de Pizza Bella Napoli" height="60" width="300" class="me-2">
            </a>
            
            <button type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Abrir navegación" class="navbar-toggler border-0">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menuNavegacion" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li>
                        <a href="#Inicio" class="nav-link px-3 btn rounded-pill px-4 fw-bold btn-warning text-light">Inicio</a>
                    </li>
                    <li>
                        <a href="#Catálogo" class="nav-link px-3 btn rounded-pill px-4 fw-bold btn-warning text-light">Cátalogo</a>
                    </li>
                    <li>
                        <a href="#Arma tu Pizza" class="nav-link px-3 btn rounded-pill px-4 fw-bold btn-warning text-light">Sección Interactiva</a>
                    </li>
                    <li>
                        <a href="#Pedidos" class="nav-link px-3 btn rounded-pill px-4 fw-bold btn-warning text-light">Pedidos</a>
                    </li>
                     <li>
                        <a href="#Sucursales" class="nav-link px-3 btn rounded-pill px-4 fw-bold btn-warning text-light">Sucursales</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <header id="inicio" class="py-5 bg-light text-dark">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                
                <div class="col-12 col-lg-7">
                    <span class="badge rounded-pill px-3 py-2 mb-3 bg-danger text-light ">
                        <i class="bi bi-geo-alt-fill"></i> Honduras
                    </span>
                    <h1 class="display-4 fw-bold mb-3">
                        Pizzeria Bella Napoli <span>Prestigiosa Cadena Gastronomica</span>
                    </h1>
                    <p class="lead mb-4">
                        Desde hace más de 10 años, nos dedicamos a la creación de exquisitas pizzas artesanales, horneadas a la perfección en nuestros hornos de leña.
                    </p>
                    <span>
                        <p></p>
                    </span>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#Pedidos" class="btn btn-lg rounded-pill px-4 fw-bold btn-danger text-light">
                            <i class="bi bi-grid-3x3-gap-fill"></i> Pedir
                        </a>
                        <a href="Testimonios" class="btn btn-lg rounded-pill px-4 fw-bold btn-danger text-light">
                            <i class="bi bi-activity"></i> Comentarios
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="card shadow-lg rounded-4 overflow-hidden border-0 bg-primary">
                        <img class="img-fluid" src="https://img.freepik.com/fotos-premium/pizza-italiana-artesanal-tradicional-hecha-horno-lena_1061358-51574.jpg" alt="Pizza Artesanal">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-1 text-warning">Pizzeria</h5>
                            <p class="card-text small mb-0 text-light">En Pizza Balla Napoli cada pizza nace en nuestro horno a leña: masa artesanal de fermentación lenta, salsa de tomate hecha en casa e ingredientes frescos que se hornean sobre fuego de verdad. Ese toque ahumado y esa corteza crocante no salen de un horno eléctrico, salen de la leña, de la paciencia y de las ganas de hacer las cosas bien. Ven a probar la diferencia o pídela a domicilio.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header> <br>
    
    <section id="catalogo" class="py-5 bg-light">
        <div class="container py-lg-4">
            
            <div class="text-center mb-5">
                <span class="badge rounded-pill px-3 py-2 text-uppercase fw-bold text-dark">Pizzas Destacadas</span>
                <h2 class="display-6 fw-bold mt-2">Pizzas insignias del día</h2>
                <p class="text-muted">El sabor auténtico de Italia en Honduras</p>
            </div>

            <div class="row g-4">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden bg-success">
                        <img class="card-img-top style=height: 220px; object-fit: cover" src="https://tse4.mm.bing.net/th/id/OIP.3k5lpc7uGCprUQSyLr9segHaE7?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Pizza Margarita">
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge rounded-pill px-2.5 py-1.5 bg-danger">Promoción</span>
                                <span>HOY 2x1 </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Pizza Margarita</h4>
                            <p class="card-text text-secondary small flex-grow-1">
                                 Este tipo de pizza italiana esta formada por una masa de pizza napolitana como base y acompañada por 6 ingredientes solamente. Tan sencillo como un poco de tomate, queso mozzarella, albahaca fresca, sal, pimienta negra recién molida y aceite de oliva virgen extra. Es sin duda la pizza napolitana más popular.
                            </p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Precio</span>
                                    <span class="fs-5 fw-bold text-dark">L. 260 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden bg-success">
                        <img class="card-img-top style=height: 220px; object-fit: cover" src="https://healthywayrecipes.com/wp-content/uploads/2025/01/Classic-Pepperonis-Pizza-Fresh-from-the-Oven.png" alt="Pizza Pepperoni Clásica">
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge rounded-pill px-2.5 py-1.5"></span>
                                <span></span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Pizza Pepperoni Clásica</h4>
                            <p class="card-text text-secondary small flex-grow-1">
                                La Pizza Pepperoni de destaca por su cobertura de rodajas delgadas de pepperoni y queso. Su textura es crujiente en los bordes y suave en el centro, con una deliciosa capa de queso derretido que realza el sabor del pepperoni.
                            </p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Precio</span>
                                    <span class="fs-5 fw-bold text-dark">L. 360</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden bg-success">
                        <img class="card-img-top style=height: 220px; object-fit: cover" src="https://tse1.explicit.bing.net/th/id/OIP.deyhyAR4P8-5Ebb06TP_DQHaFI?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Pizza 4 Quesos">
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge rounded-pill px-2.5 py-1.5 bg-danger"> Promoción</span>
                                <span>Mitad de Precio</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Pizza 4 Quesos</h4>
                            <p class="card-text text-secondary small flex-grow-1">
                                La pizza Cuatro Quesos es una deliciosa opción para aquellos amantes del queso. Esta pizza tiene una mezcla de diferentes quesos que la hacen increíblemente sabrosa. Es perfecta para una cena especial, una reunión familiar o simplemente para un antojo.
                            </p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Precio</span>
                                    <span class="fs-5 fw-bold text-dark">L. 360</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> <br>

    <section id="TestimonioS" class="py-5 bg-light">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <span class="badge rounded-pill px-3 py-2 text-uppercase fw-bold text-dark bg-light"></span>
                <h2 class="display-6 fw-bold mt-2">Testimonios</h2>
                <p class="text-muted text-secondary">Algunos comentarios de nuestros clientes en nuestras redes sociales</p>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Instagram
                </div>
                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <p>La pizza de Margarita es mi favorita, la mejor pizza al horno de leña que he probado</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            @Min_4235 <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>
                </div>
            </div> <br>
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Facebook
                </div>
                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <p>Servicio rápido y excelente atención</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            @SamGarcia <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>
                </div>
            </div> <br>
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Twitter
                </div>
                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <p>¡Que delicia de pizzas! La carta ofrece una gran variedad de opciones y todas las que probamos fueron deliciosas.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            @MonicaH4235 <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
                    
    </section>

    <footer class="py-5 mt-auto border-top bg-primary text-white">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-12 col-md-4"> 
                    <h5><i class="bi bi-water"></i> Pizzeria Bella Napoli</h5>
                    <p>
                        Desde hace más de 10 años, nos dedicamos a la creación de exquisitas pizzas artesanales, horneadas a la perfección en nuestros hornos de leña.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <h6 text-uppercase>Horarios de Cocina</h6>
                    <ul>
                        <li><i></i> Lunes a Viernes: 10:00 a.m. - 7:00 p.m.</li>
                        <li><i></i> Sábados: 10:00 a.m. - 8:00 p.m.</li>
                    </ul>
                </div>

                <div class="col-12 col-md-4">
                    <h6 text-uppercase>Nos puedes encontrar </h6>
                    <a class="icon-link" href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" href="">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>
                        </span>
                    </a>
                    <a class="icon-link" href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                        </span>
                    </a>
                    <a class="icon-link" href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </span>
                    </a>
                </div>

            </div>

            <div>
                &copy; 2026 Pizzeria Bella Napoli — Honduras.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
    