@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Doctores</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-danger fw-bold">
            <i class="bi bi-people-fill" style="font-size: 2rem; color: #e91e63;"></i> Lista de Doctores
        </h1>
    </div>

    <!-- Botón de nuevo doctor -->
    <a href="{{ route('doctores.create') }}" class="btn mb-3" style="font-size: 1.2rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nuevo Doctor
    </a>

    <!-- Tabla de doctores -->
    <div class="table-responsive">
        <table class="table table-hover shadow-lg" style="background-color: #fff3f4; border-radius: 15px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #f8bbd0, #f48fb1); color: white;">
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Apellido</th>
                    <th style="text-align: center;">Especialidad</th>
                    <th style="text-align: center;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctores as $doctor)
                <tr style="border-bottom: 1px solid #f8bbd0;">
                    <td class="align-middle text-center">{{ $doctor->id }}</td>
                    <td class="align-middle text-center">{{ $doctor->nombre }}</td>
                    <td class="align-middle text-center">{{ $doctor->apellido }}</td>
                    <td class="align-middle text-center">{{ $doctor->especialidad }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('doctores.destroy', $doctor->id) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-sm text-white" style="background-color: #f48fb1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <i class="bi bi-eye-fill"></i> Mostrar
                            </a>
                            <a href="{{ route('doctores.edit', $doctor->id) }}" class="btn btn-sm text-dark" style="background-color: #ffb2c1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
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
        {{ $doctores->links('pagination::bootstrap-4') }}
    </div>
@endsection
