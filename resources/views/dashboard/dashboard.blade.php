@extends('layout.plantilla')

@section('contenido')
    <h2 class="mb-0" >
        <i class="fab fa-dashcube fa-fw"></i><strong>Dashboard</strong>
    </h2><br>
    <h5>
        <span class="text-secondary">¡Bienvenido Andres Torres Principal! Este es el panel principal del sistema 
            acá podrá encontrar atajos para acceder a los distintos listados de cada módulo del sistema.
        </span>
    </h5><br>

    <!--Dashboard widget 2-->
    <div class="mt-1 mb-3 button-container">
        <div class="row pl-0">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-success">
                        <p class="pw-2 text-center text-white">
                            <i class="fa fa-laptop"></i>
                            <!-- <i class="fas fa-cash-register"></i> -->
                            <small class="bc-description text-white">225</small>
                        </p>
                        <p class="mt-2 text-white">Cajas registradas</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-danger">
                        <p class="pw-2 text-center text-white">
                            <i class="fa fa-truck"></i>
                            <small class="bc-description text-white">557</small>
                        </p>
                        <p class="mt-2 text-white">Proveedores registrados</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-primary">
                        <p class="pw-2 text-center text-white">
                            <i class="fa fa-tags"></i>
                            <small class="bc-description text-white">1225</small>
                        </p>
                        <p class="mt-2 text-white">Categorías registradas</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-warning">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-user-tie fa-fw"></i>
                            <small class="bc-description text-white">95</small>
                        </p>
                        <p class="mt-2 text-white">Usuarios registrados</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-success">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-boxes fa-fw"></i>
                            <!-- <i class="fas fa-cash-register"></i> -->
                            <small class="bc-description text-white">225</small>
                        </p>
                        <p class="mt-2 text-white">Productos registrados</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-danger">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-child fa-fw"></i>
                            <small class="bc-description text-white">557</small>
                        </p>
                        <p class="mt-2 text-white">Clientes registrados</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-primary">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-money-check-alt fa-fw"></i>
                            <small class="bc-description text-white">1225</small>
                        </p>
                        <p class="mt-2 text-white">Movimientos registrados</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-warning">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-coins fa-fw"></i>
                            <!-- <small class="bc-description text-white">95</small> -->
                        </p>
                        <p class="mt-2 text-white">Ventas</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-success">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-people-carry fa-fw"></i>
                            <!-- <i class="fas fa-cash-register"></i> -->
                            <!-- <small class="bc-description text-white">225</small> -->
                        </p>
                        <p class="mt-2 text-white">Devoluciones</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-danger">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-file-invoice-dollar fa-fw"></i>
                            <!-- <small class="bc-description text-white">557</small> -->
                        </p>
                        <p class="mt-2 text-white">Compras</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-primary">
                        <p class="pw-2 text-center text-white">
                            <i class="fas fa-pallet fa-fw"></i>
                            <!-- <small class="bc-description text-white">1225</small> -->
                        </p>
                        <p class="mt-2 text-white">Kardex</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <a href="">
                    <div class="border shadow p-3 bg-warning">
                        <p class="pw-2 text-center text-white">
                            <i class="far fa-file-pdf fa-fw"></i>
                            <!-- <small class="bc-description text-white">95</small> -->
                        </p>
                        <p class="mt-2 text-white">Reportes</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--/Dashboard widget-->
@endsection
