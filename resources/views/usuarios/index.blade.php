@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm border-0 rounded-4">

        <!-- HEADER -->
        <div class="card-header bg-white border-0 pt-4 px-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h2 class="fw-bold mb-0">Usuarios</h2>
                    <small class="text-muted">
                        Listado de usuarios
                    </small>
                </div>

                <button class="btn btn-primary rounded-3">
                    <i class="fas fa-plus-circle"></i>
                    Nuevo
                </button>

            </div>

        </div>

        <!-- BODY -->
        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                        <th width="150">Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($usuarios as $usuario)

                    <tr>

                        <td>{{ $usuario->id }}</td>

                        <td>{{ $usuario->name }}</td>

                        <td>{{ $usuario->email }}</td>

                        <td>{{ $usuario->created_at }}</td>

                        <td>

                            <button class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection