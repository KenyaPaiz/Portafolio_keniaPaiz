<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/css/bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" href="recursos/css/style.css">
    <title>Mi Portafolio-Kenia Paiz</title>
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="index.html">Mi portafolio</a></h1>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                        <li><a class="nav-link scrollto" href="#about">Mis Proyectos</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>
    </div>
</header><!-- End Header -->
<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2>&nbsp;&nbsp;&nbsp; Kenia Paiz</h2>
                    <p> Hola! Soy una desarrolladora backend junior, tengo un tecnico en ingenieria en computación,
                        actualmente me estoy formando en la area de desarrollo web, me considero una persona responsable,
                        trabajadora y colaborativa, con el gran deseo de trabajar en nuevos proyectos y seguir
                        fortaleciendo mis conocimientos y habilidades.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Conocimientos</h2>
                    <li>Lenguaje de programacion: <b>PHP</b></li>
                    <li>Framework Laravel</li>
                    <li>Programacion Orientada a Objetos (POO)</li>
                    <li>Principios SOLID</li>
                    <li>Base de datos, MySQL</li>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->
<!-- ======= About Us Section ======= -->
<main id="main">
    <section id="about">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>Mis Proyectos</h3>
            </header>
            <div class="row about-cols">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                    <div class="img">
                        <img src="recursos/img/api.jpeg" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Creacion de una API</a></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                    <div class="img">
                        <img src="recursos/img/nomina.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    </div>
                    <h2 class="title"><a href="proyectos/proyecto_nomina.php">Nomina de empleados</a></h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                    <div class="img">
                        <img src="recursos/img/about-vision.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Our Vision</a></h2>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->
</main><!-- End #main -->
<script src="recursos/js/main.js"></script>
</body>
</html>