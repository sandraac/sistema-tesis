<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('estilos')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muncibay Juárez Kevin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- DASHBOARD -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fab fa-dashcube fa-fw"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>

<!-- ADMINISTRACIÓN -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-briefcase fa-fw"> </i>
              <p>
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-users-cog"></i>
                  <p>Nueva categoría</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-truck"></i> 
                  <p>Nuevo provedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-user"></i>
                  <p>Nuevo usuario</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-child"></i>
                        <p>Nuevo cliente</p>
                    </a>
                </li>
            </ul>
          </li>

<!-- PRODUCTOS -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-boxes fa-fw"> </i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-box fa-fw"></i>
                  <p>Nuevo producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Producto.Index')}}" class="nav-link">
                <i class="fas fa-boxes fa-fw"></i> 
                  <p>Productos en almacén</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-hand-holding-usd"></i>
                  <p>Lo más vendido</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-tags"></i>
                        <p>Productos por categoría</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-history fa-fw"></i>
                        <p>Productos por vencimiento</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-business-time"></i>
                        <p>Productos en stock mínimo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Producto.Buscar')}}" class="nav-link">
                    <i class="fas fa-search fa-fw"></i>
                        <p>Buscar productos</p>
                    </a>
                </li>
            </ul>
          </li>


<!-- COMPRAS -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-shopping-basket fa-fw"> </i>
              <p>
                Compras
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
                  <p>Nueva compra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-shopping-bag"></i> 
                  <p>Compras realizadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-search fa-fw"></i>
                  <p>Buscar compra</p>
                </a>
              </li>
            </ul>
          </li>

<!-- VENTAS -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-hand-holding-usd"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-cart-plus fa-fw"></i>
                  <p>Nueva venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-parachute-box fa-fw"></i> 
                  <p>Venta por mayoreo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-coins fa-fw"></i>
                  <p>Ventas realizadas</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fab fa-creative-commons-nc fa-fw"></i>
                        <p>Ventas pendientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-search-dollar"></i>
                        <p>Buscar venta (Fecha)</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fas fa-search-dollar"></i>
                        <p>Buscar venta (Código)</p>
                    </a>
                </li>
            </ul>
          </li>

<!-- DEVOLUCIONES -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-truck-loading fa-fw"></i>
              <p>
                Devoluciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('devoluciones.listar')}}" class="nav-link">
              <i class="fas fa-people-carry fa-fw"></i>
                  <p>Devoluciones realizadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('devoluciones.buscar')}}" class="nav-link">
                <i class="fas fa-dolly-flatbed fa-fw"></i> 
                  <p>Buscar devoluciones</p>
                </a>
              </li>
            </ul>
          </li>

<!-- KARDEX -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i>
              <p>
                Kardex
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-pallet fa-fw"></i>
                  <p>Kardex general</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-search fa-fw"></i>
                  <p>Buscar kardex</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-luggage-cart fa-fw"></i>
                  <p>Kardex de producto</p>
                </a>
              </li>
            </ul>
          </li>

<!-- REPORTES -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-file-pdf"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-hand-holding-usd fa-fw"></i>
                  <p>Reportes de ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-box-open fa-fw"></i> 
                  <p>Reportes de inventario</p>
                </a>
              </li>
            </ul>
          </li>

<!-- CONFIGURACIONES -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cogs fa-fw"></i>
              <p>
                Configuraciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-store-alt fa-fw"></i>
                  <p>Datos de la empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-sync fa-fw"></i>
                  <p>Actualizar cuenta</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content"><br>

      @yield('contenido')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@yield('script')
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
    <script>
        //Nice select
        $("#productList").DataTable();
        $('.bulk-actions').niceSelect();
    </script>
</body>
</html>
