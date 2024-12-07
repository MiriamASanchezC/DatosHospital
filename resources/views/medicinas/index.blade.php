@extends( 'layouts.app' )
@section( 'content' )
    <div class="animated-header text-center my-4">
        <h1 class="text-danger fw-bold">Lista de Medicinas</h1>
    </div>
    <a href="{{ route( 'medicinas.create' ) }}" class="btn mb-3" style="font-size: 1.2rem; background-color: #f48fb1; color: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nueva Medicina
    </a>
    <div class="table-responsive">
        <table class="table table-hover shadow-lg" style="background-color: #fff3f4; border-radius: 15px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #f8bbd0, #f48fb1); color: white;">
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Clave</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Precio</th>
                    <th style="text-align: center;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $medicinas as $medicina )
                <tr style="border-bottom: 1px solid #f8bbd0;">
                    <td class="align-middle text-center">{{ $medicina->MEDICINAS_ID }}</td>
                    <td class="align-middle text-center">{{ $medicina->CLAVE }}</td>
                    <td class="align-middle text-center">{{ $medicina->NOMBRE }}</td>
                    <td class="align-middle text-center">${{ number_format($medicina->PRECIO, 2) }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('medicinas.destroy', $medicina->MEDICINAS_ID) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('medicinas.show', $medicina->MEDICINAS_ID) }}" class="btn btn-sm text-white" style="background-color: #f48fb1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                Mostrar
                            </a>
                            <a href="{{ route('medicinas.edit', $medicina->MEDICINAS_ID) }}" class="btn btn-sm text-dark" style="background-color: #ffb2c1; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                Editar
                            </a>
                            @method( 'DELETE' )
                            <button type="submit" class="btn btn-sm text-white" style="background-color: #e57373; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $medicinas->links('pagination::bootstrap-4') }}
    </div>
@endsection
