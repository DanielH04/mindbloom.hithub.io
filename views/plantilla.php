<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MindBloom - Salud Mental</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.6.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="views/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="views/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="views/assets/css/style.css" rel="stylesheet">

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="views/assets/lib/wow/wow.min.js"></script>
    <script src="views/assets/lib/easing/easing.min.js"></script>
    <script src="views/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="views/assets/lib/counterup/counterup.min.js"></script>
    <script src="views/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="views/assets/js/main.js"></script>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 style="color:#94D6BA"><i class="fa-solid fa-brain"></i></i>MindBloom</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div  class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="#" class="nav-item nav-link">Sobre Nosotros</a>
                    <a href="#" class="nav-item nav-link">Contactanos</a>
                </div>
                <div class="d-none d-xl-flex me-3">
                    <div class="d-flex flex-column pe-3 border-end border-primary">
                        <span style="color:#94D6BA">Solicita ayuda sin costo</span>
                        <a href="tel:+4733378901"><span style="color:#94D6BA">Línea de la Vida (800 911 2000)</span></a>
                    </div>
                </div>
                <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Iniciar Sesión</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="views/assets/img/saludm.jpeg" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption-1">
                            <div class="carousel-caption-1-content" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">La Importanca de la Salud Mental</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">La salud mental no es un destino, sino un proceso.</h1>
                                <p class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1.5s;">La salud mental es un aspecto crucial de nuestras vidas que merece la misma atención y cuidado que la salud física.</p>
                                <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                    <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Iniciar Sesión</a>
                                    <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 style="color:#94D6BA" class="text-uppercase">Nuestra Misión</h4>
                <h1 style="color:#94D6BA" class="display-3 text-capitalize mb-3">Florece Desde Tu Mente</h1>
            </div>
            <div class="row g-4">

                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3" style="background-color: #94D6BA;"><i class="fa-solid fa-briefcase-medical text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Mejora la Inteligencia Emocional </a>
                        <p class="mb-3">Te ofrecemos recursos para prevenir la depresión.
                        </p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3" style="background-color: #94D6BA;"><i class="fa-solid fa-hand-holding-heart text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Apoyo Emocional</a>
                        <p class="mb-3">Manejar el estrés y brindar apoyo emocional.
                        </p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3" style="background-color: #94D6BA;"><i class="fa-regular fa-compass text-white fa-3x"></i></i></div>
                        <a href="#" class="h4 mb-3">Orientación Psicológica</a>
                        <p class="mb-3">Facilitar el acceso a servicios de tratamiento psicológico y orientación profesional.</p>
                        <p></p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3" style="background-color: #94D6BA;"><i class="fa-solid fa-people-carry-box text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Facilitar la Acción Oportuna</a>
                        <p class="mb-3">Proporcionar herramientas a los usuarios para que puedan actuar en un momento determinado.</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- feature End -->

    <!-- Footer Start -->
    <div style="background-color: #94D6BA;" class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-7">
                    <div class="position-relative mx-auto">
                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ingresa tu Email para Subscribirte">
                        <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribete</button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h3 class="text-white mb-4"><i class="fa-solid fa-brain me-3"></i>MindBloom</h3>
                            <p class="mb-3">En MindBloom nuestro objetivo es tu Bienestar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Sobre Nosotros</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Porqué elegirnos?</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Cómo te ayudamos?</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contactanos</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terminos y condiciones.</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Horarios</h4>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Lunes - Viernes:</h6>
                            <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Sabado:</h6>
                            <p class="text-white mb-0">10.00 am to 03.00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Información de Contacto</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i>Piedras Negras Coahuila, México</a>
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> mindbloom@outlook.com</a>
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> mindbloom_ayuda@gmail.com</a>
                        <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div style="background-color: #94D6BA;" class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>MindBloom</a>, Todos los Derechos Reservados.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

</body>

</html>