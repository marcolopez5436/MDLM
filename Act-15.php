<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostrap Hola | Program Web</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        
    <header class="bg-dark text-white text-center py-5">

    <h1 class="display-4 fw-bold">
        Marco Daniel López Mora
    </h1>

    <p class="lead">
        Estudiante de Tecnologías de la Información
    </p>

    <p>
        Bienvenido a mi portafolio académico.
        Aquí encontrarás mis proyectos y actividades.
    </p>

</header>
    
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Mi Portafolio
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menuPrincipal"
            aria-controls="menuPrincipal"
            aria-expanded="false"
            aria-label="Abrir menú">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#sobre-mi">Sobre mí</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#proyectos">Proyectos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

    
<main class="container my-5">

    <!-- Presentación -->
    <section id="sobre-mi" class="mb-5">

        <h2 class="text-center mb-3">Sobre mí</h2>

        <p class="text-center">
            Soy estudiante de Tecnologías de la Información.
            Este espacio está dedicado a mostrar mis aprendizajes,
            proyectos y actividades realizadas durante mi formación académica.
        </p>

    </section>

    <!-- Proyectos -->
    <section id="proyectos">

        <h2 class="text-center mb-4">Mis proyectos</h2>

        <div class="row g-4">

            <!-- Proyecto 1 -->
            <div class="col-12 col-md-6 col-lg-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h5 class="card-title">Actividad 12</h5>
                        <p class="card-text">
                            Creación de una tabla períodica mediante HTML y CSS, utilizando estilos externos y diseño responsivo.
                        </p>
                        <a href="https://github.com/marcolopez5436/MDLM/tree/main/Actividad%2012" class="btn btn-primary" target="_blank">
                            Ver proyecto
                        </a>
                    </div>
                </div>
            </div>
            <!-- Proyecto 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actividad 9</h5>
                        <p class="card-text">
                            Actividad para utilizar CSS externo y crear un diseño de página web.
                        </p>
                        <a href="https://github.com/marcolopez5436/MDLM/tree/main/Ejercicio%209" class="btn btn-primary" target="_blank">
                            Ver proyecto
                        </a>
                    </div>
                </div>
            </div>
            <!-- Proyecto 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actividad 10</h5>
                        <p class="card-text">
                            Actividad sobre creación de una noticia en HTML.
                        </p>
                        <a href="https://github.com/marcolopez5436/MDLM/blob/main/Act%2010%20-%20Noticia.html" class="btn btn-primary" target="_blank">
                            Ver proyecto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    
<footer id="contacto" class="bg-dark text-white text-center py-4 mt-5">

    <div class="container">

        <h5>Marco Daniel López Mora</h5>

        <p class="mb-2">
            Estudiante de Tecnologías de la Información
        </p>

        <p class="mb-2">
            Portafolio académico | Programación Web
        </p>

        <p class="mb-0">
            &copy; 2026 Todos los derechos reservados.
        </p>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>