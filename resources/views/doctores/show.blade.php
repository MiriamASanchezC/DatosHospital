@extends( 'layouts.app' )
@section( 'content' )
<title>Info del Doctor</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-danger fw-bold">
            <i class="bi bi-person-badge-fill" style="font-size: 2rem; color: #e91e63;"></i> Información del Doctor
        </h1>
    </div>

    <div class="container mt-4">
        <!-- Botón de regresar -->
        <a href="{{ route('doctores.index') }}" class="btn mb-3" style="font-size: 1.1rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>

        <!-- Tarjeta con información -->
        <div class="card shadow-lg" style="border-radius: 15px; background-color: #fff3f4;">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #f8bbd0, #f48fb1); border-radius: 15px 15px 0 0;">
                <h5 class="mb-0">
                    <i class="bi bi-info-circle" style="font-size: 1.5rem;"></i> Detalles del Doctor
                </h5>
            </div>
            <div class="card-body" style="color: #880e4f; font-size: 1.2rem;">
                <p><strong><i class="bi bi-person-fill" style="color: #d81b60;"></i> Nombre:</strong> 
                    <span style="color: #d81b60;">{{ $doctor->nombre }}</span>
                </p>
                <p><strong><i class="bi bi-person-lines-fill" style="color: #ad1457;"></i> Apellido:</strong> 
                    <span style="color: #ad1457;">{{ $doctor->apellido }}</span>
                </p>
                <p><strong><i class="bi bi-award" style="color: #c2185b;"></i> Especialidad:</strong> 
                    <span style="color: #c2185b;">{{ $doctor->especialidad }}</span>
                </p>
            </div>
        </div>
    </div>
@endsection
