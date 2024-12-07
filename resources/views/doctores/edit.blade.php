@extends( 'layouts.app' )
@section( 'content' )
<title>Editar Doctor</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-danger fw-bold">
            <i class="bi bi-pencil-square" style="font-size: 2rem; color: #e91e63;"></i> Editar Doctor
        </h1>
    </div>

    <div class="container mt-4">

        <!-- Botón de regresar -->
        <a href="{{ route('doctores.index') }}" class="btn mb-3" style="font-size: 1.1rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>

        <!-- Formulario -->
        <form id="miFormulario" action="{{ route('doctores.update', $doctor->id) }}" method="POST" class="shadow-lg p-4" style="background-color: #fff3f4; border-radius: 15px;">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold" style="color: #d81b60;">
                    <i class="bi bi-person-fill" style="color: #d81b60;"></i> Nombre:
                </label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $doctor->nombre }}" placeholder="Ingresa el nombre" 
                       style="border-radius: 10px; border: 1px solid #d81b60; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Apellido -->
            <div class="mb-3">
                <label for="apellido" class="form-label fw-bold" style="color: #ad1457;">
                    <i class="bi bi-person-lines-fill" style="color: #ad1457;"></i> Apellido:
                </label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $doctor->apellido }}" placeholder="Ingresa el apellido" 
                       style="border-radius: 10px; border: 1px solid #ad1457; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Especialidad -->
            <div class="mb-3">
                <label for="especialidad" class="form-label fw-bold" style="color: #c2185b;">
                    <i class="bi bi-briefcase-fill" style="color: #c2185b;"></i> Especialidad:
                </label>
                <input type="text" id="especialidad" name="especialidad" class="form-control" value="{{ $doctor->especialidad }}" placeholder="Ingresa la especialidad" 
                       style="border-radius: 10px; border: 1px solid #c2185b; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('doctores.index') }}" class="btn btn-light me-2" style="border-radius: 10px; background-color: #f48fb1; color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-x-circle"></i> Cancelar
                </a>
                <button type="submit" class="btn" style="border-radius: 10px; background-color: #e91e63; color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-check-circle"></i> Guardar
                </button>
            </div>
        </form>
    </div>
@endsection
