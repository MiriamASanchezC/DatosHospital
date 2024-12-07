@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Medicina</title>
    <div class="animated-header text-center my-4">
        <h1 class="fw-bold" style="color: #e91e63;">
            <i class="bi bi-plus-circle" style="font-size: 2rem;"></i> Agregar Medicina
        </h1>
    </div>
    <div class="container mt-4">

        <!-- Botón de regresar -->
        <a href="{{ route('medicinas.index') }}" class="btn mb-3" 
           style="font-size: 1.1rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>

        <!-- Formulario -->
        <form id="miFormulario" action="{{ route('medicinas.store') }}" method="POST" class="shadow-lg p-4" style="background-color: #fff3f4; border-radius: 15px;">
            @csrf

            <!-- Clave -->
            <div class="mb-3">
                <label for="clave" class="form-label fw-bold" style="color: #d81b60;">
                    <i class="bi bi-key-fill"></i> Clave:
                </label>
                <input type="text" id="clave" name="clave" class="form-control" placeholder="Ingresa la clave" 
                       style="border-radius: 10px; border: 1px solid #d81b60; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold" style="color: #ad1457;">
                    <i class="bi bi-capsule"></i> Nombre:
                </label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" 
                       style="border-radius: 10px; border: 1px solid #ad1457; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label fw-bold" style="color: #c2185b;">
                    <i class="bi bi-currency-dollar"></i> Precio:
                </label>
                <input type="text" id="precio" name="precio" class="form-control" placeholder="Ingresa el precio" 
                       style="border-radius: 10px; border: 1px solid #c2185b; background-color: #fce4ec; color: #880e4f;">
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn me-2" 
                        style="background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-x-circle"></i> Limpiar
                </button>
                <button type="submit" class="btn" 
                        style="background-color: #e91e63; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-check-circle"></i> Guardar
                </button>
            </div>
        </form>
    </div>
@endsection
