<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/landing.css') }}">
    </head>

    <body>
            <!-- Navigation-->
            <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <img src="../assets/img/logo.png" alt="logo">
                <a class="btn btn-primary"style="background: #39a900; border:none; with:300px;" href="{{ route('login') }}">login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                            <div >
                                <!-- Page heading-->
                                <h1 class="mb-5">¡Bienvenidos a SS_ETP!</h1>
                                
                            </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section id="information" class="features-icons  text-center">
            <div class="container">
                <div class="row1">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Totalmente adaptable</h3>
                            <p class="lead mb-0">Este aplicativo web se vera excelente en cualquier dispositivo,sin importar el tamaño!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>Diseñado con Bootsrap5</h3>
                            <p class="lead mb-0">Presentando la última versión del nuevo marco de trabajo Bootstrap 5!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Facil uso</h3>
                            <p class="lead mb-0">listo para usar tu propiaa gestion de bitacoras , y sin necesidad de tantas vueltas!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/fondo.jfif')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Centro Agroempresarial y Desarrollo Pecuario del Huila</h2>
                        <p class="lead mb-0">En en Centro Agroempresarial y Desarrollo Pecuario del Huila encontramos la solucion para simplificar el siguimiento de la etapa productiva del aprendiz , dando como resulatdo el desarrollo del aplicativo web SS_ETP.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/biblo.png')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Eficiencia Administrativa </h2>
                        <p class="lead mb-0">Nuestro Aplicativo web optimiza los procesos administrativos , permitiendo una gestion mas agil y precisa de la carga de bitacora de los aprendices.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/perso.png')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Retroalimentacion </h2>
                        <p class="lead mb-0">Los instructores pueden identificar facilmente a que aprendices  se les a asignado retroalimentar sus bitacoras, facilitando el proceso de correcion y mejora.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Desarrollado por</h2>
                <div class="row2">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Mayra Palma Rojas.</h5>
                            <p class="font-weight-light mb-0">Desarrolladora Front-end</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/andres.jfif" alt="..." />
                            <h5>Andres Felipe  Ramirez Collazos</h5>
                            <p class="font-weight-light mb-0">Desarrollador Back-end</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4 text-dark  text-bg-light ">¡Únete a la revolucion educativa con SS_ETP y agiliza la formacion, llevala al siguiente nivel!</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       
        <script src="js/scripts.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
