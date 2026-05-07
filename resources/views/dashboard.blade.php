@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- TITULO -->
    <div class="card shadow-sm border-0 rounded-4 p-4">

        <h1 class="fw-bold mb-1">Dashboard</h1>
        <p class="text-muted">Bienvenido nuevamente al sistema</p>

        <!-- TARJETAS -->
        <div class="row mt-4">

            <!-- Usuarios -->
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Usuarios</small>
                            <h3 class="fw-bold">Gestión</h3>
                        </div>

                        <div class="bg-primary bg-opacity-25 p-3 rounded-4">
                            <i class="fas fa-users text-primary fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reportes -->
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Reportes</small>
                            <h3 class="fw-bold">Estadísticas</h3>
                        </div>

                        <div class="bg-success bg-opacity-25 p-3 rounded-4">
                            <i class="fas fa-chart-bar text-success fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documentos -->
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Documentos</small>
                            <h3 class="fw-bold">Archivos</h3>
                        </div>

                        <div class="bg-warning bg-opacity-25 p-3 rounded-4">
                            <i class="fas fa-folder text-warning fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Configuración -->
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Configuración</small>
                            <h3 class="fw-bold">Sistema</h3>
                        </div>

                        <div class="bg-danger bg-opacity-25 p-3 rounded-4">
                            <i class="fas fa-cog text-danger fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection