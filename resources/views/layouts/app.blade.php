<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        /* Encabezado */
        .navbar {
            background: linear-gradient(to right, #f48fb1, #f06292); /* Gradiente rosa */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand {
            font-weight: bold;
            color: #ffffff;
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #f06292, #e91e63); /* Gradiente rosa más oscuro */
            color: #ffffff;
            padding: 20px 0;
            border-radius: 15px 15px 0 0;
        }

        footer .icon {
            font-size: 1.5rem;
            color: #ffd1dc; /* Rosa pálido */
            margin-right: 10px;
        }

        footer a {
            color: #ffd1dc; /* Rosa claro */
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }

        footer a:hover {
            color: #ffffff;
        }

        footer .section-title {
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: #ffc1e3; /* Rosa suave */
        }

        footer .contact-item {
            margin-bottom: 10px;
        }

        footer i {
            margin-right: 8px;
        }
    </style>
</head>
<body class="bg-white text-dark">

    <!-- Header -->
    <header class="text-center">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Miri Hospital</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer style="background: linear-gradient(to right, #e91e63, #f06292); color: #ffffff; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <!-- Misión -->
            <div class="col-md-4">
                <h5 class="fw-bold text-uppercase">Nuestra Misión</h5>
                <p>
                    Proporcionar servicios médicos de alta calidad con un enfoque humano, innovador y profesional.
                    Nos dedicamos a cuidar de la salud y bienestar de nuestras comunidades.
                </p>
            </div>

            <!-- Horarios -->
            <div class="col-md-4">
                <h5 class="fw-bold text-uppercase">Horarios de Atención</h5>
                <ul class="list-unstyled">
                    <li><strong>Lunes a Viernes:</strong> 8:00 AM - 8:00 PM</li>
                    <li><strong>Sábado:</strong> 9:00 AM - 2:00 PM</li>
                    <li><strong>Domingo:</strong> Cerrado</li>
                </ul>
            </div>

            <!-- Noticias y Eventos -->
            <div class="col-md-4">
                <h5 class="fw-bold text-uppercase">Últimas Noticias</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="bi bi-newspaper"></i> Nueva Unidad de Oncología Abre Sus Puertas
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="bi bi-calendar-event"></i> Jornada de Donación de Sangre este Sábado
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="bi bi-people-fill"></i> Taller de Primeros Auxilios Gratuito
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Links rápidos -->
            <div class="col-md-6">
                <h5 class="fw-bold text-uppercase">Explora</h5>
                <ul class="list-unstyled d-flex flex-wrap">
                    <li class="me-3"><a href="#" class="text-white text-decoration-none"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="me-3"><a href="#" class="text-white text-decoration-none"><i class="bi bi-heart"></i> Servicios</a></li>
                    <li class="me-3"><a href="#" class="text-white text-decoration-none"><i class="bi bi-chat-dots"></i> Contáctanos</a></li>
                    <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-info-circle"></i> Sobre Nosotros</a></li>
                </ul>
            </div>

            <!-- Frase inspiradora -->
            <div class="col-md-6 text-end">
                <h5 class="fw-bold text-uppercase">Cita Inspiradora</h5>
                <p>
                    <em>"La salud no es un estado estático, sino un equilibrio dinámico entre cuerpo, mente y espíritu."</em>
                </p>
            </div>
        </div>

        <div class="text-center mt-4">
            <small>&copy; 2024 Hospital +. Diseñado con amor y cuidado para la salud.</small>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
