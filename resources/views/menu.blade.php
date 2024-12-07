@extends( 'layouts.app' )
@section( 'content' )
    <title>FSINICIOAD24</title>
    <style>
        /* Imagen de fondo */
        .background-image {
            background: linear-gradient(to bottom, #f8bbd0, #f48fb1); /* Gradiente rosa */
            min-height: 60vh;
            padding-top: 80px;
            color: white;
        }

        /* Estilo de los enlaces */
        .list-group a {
            background-color: #f06292; /* Rosa vibrante */
            border: 1px solid #ec407a; /* Bordes más oscuros */
            color: white; /* Letras blancas */
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            font-size: 1.2rem;
            padding: 15px;
            transition: transform 0.2s ease, background-color 0.2s ease, color 0.2s ease;
            text-decoration: none;
            border-radius: 10px;
        }

        .list-group a:not(:last-child) {
            margin-bottom: 10px; /* Separación entre los enlaces */
        }

        .list-group a:hover {
            transform: scale(1.05);
            background-color: #ec407a; /* Rosa más oscuro */
            color: #ffffff; /* Letras blancas */
        }

        /* Estilo del título */
        .page-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #880e4f; /* Rosa oscuro */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Sombra para contraste */
        }
    </style>

    <div class="background-image text-center">
        <h1 class="page-title">Consulta</h1>
        <div class="container mt-4">
            <div class="list-group shadow-lg" style="max-width: 500px; margin: auto;">
                <a href="{{ route('medicinas.index') }}" class="list-group-item">
                    Medicinas
                </a>
                <a href="{{ route('doctores.index') }}" class="list-group-item">
                    Doctores
                </a>
                <a href="{{ route('especialidades.index') }}" class="list-group-item">
                    Especialidades
                </a>
                <a href="{{ route('pacientes.index') }}" class="list-group-item">
                    Pacientes
                </a>
            </div>
        </div>
    </div>
@endsection
