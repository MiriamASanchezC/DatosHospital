@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Especialidades</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-danger fw-bold">
            <i class="bi bi-bookmark-fill" style="font-size: 2rem; color: #e91e63;"></i> Lista de Especialidades
        </h1>
    </div>

    <!-- Botón de nueva especialidad -->
    <a href="{{ route('especialidades.create') }}" class="btn mb-3" style="font-size: 1.2rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nueva Especialidad
    </a>

    <!-- Tabla de especialidades -->
    <div class="table-responsive">
        <table class="table table-hover shadow-lg" style="background-color: #fff3f4; border-radius: 15px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #f8bbd0, #f48fb1); color: white;">
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Descripción</th>
                    <th style="text-align: center;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($especialidades as $especialidad)
                <tr style="border-bottom: 1px solid #f8bbd0;">
                    <td class="align-middle text-center">{{ $especialidad->id }}</td>
                    <td class="align-middle text-center">{{ $especialidad->nombre }}</td>
                    <td class="align-middle text-center">{{ $especialidad->descripcion }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('especialidades.destroy', $especialidad->id) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('especialidades.show', $especialidad->id) }}" class="btn btn-sm text-white" style="background-color: #f48fb1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <i class="bi bi-eye-fill"></i> Mostrar
                            </a>
                            <a href="{{ route('especialidades.edit', $especialidad->id) }}" class="btn btn-sm text-dark" style="background-color: #ffb2c1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <i class="bi bi-pencil-fill"></i> Editar
                            </a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm text-white" style="background-color: #e57373; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-3">
        {{ $especialidades->links('pagination::bootstrap-4') }}
    </div>
@endsection
