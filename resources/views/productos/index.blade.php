@extends('layout.plantilla')

@section('estilos')
<!-- PARA LISTAR -->
<link rel="stylesheet" href="/../../../public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="/../../../public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/../../../public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/../../../public/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('contenido')

    <div class="full-box page-header">
        <h3 class="text-left text-uppercase">
            <i class="fas fa-box fa-fw"></i> &nbsp; Productos en almacén
        </h3>
        <p class="text-justify">
            En el módulo PRODUCTOS podrá agregar nuevos productos al sistema, actualizar datos de los productos, eliminar o actualizar 
            la imagen de los productos, imprimir códigos de barras o SKU de cada producto, buscar productos en el sistema, ver todos los 
            productos en almacén, ver los productos más vendido y filtrar productos por categoría.
        </p>
    </div>

        <!--Dashboard widget-->
        <div class="mt-1 mb-6 button-container">
            <div class="row pl-0">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <a class="active" href="#">
                        <i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-coins"></i> &nbsp; Lo más vendido
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-tags"></i> &nbsp; Productos por categoría
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-stopwatch-20"></i> &nbsp; Productos en stock mínimo
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="">
                        <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
                    </a>
                </div>
            </div>
        </div>
        <!--/Dashboard widget-->

    <!--Product Listing-->
    <div class="product-list">
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Listado de productos</h6></div>
            <div class="col-sm-4 text-right pb-3">
                <button class="btn btn-round btn-theme"><i class="fa fa-plus"></i> Añadir producto</button>
            </div>
        </div>
        <div class="table-responsive product-list">     
            <table class="table table-bordered table-striped mt-3" id="productList" >
                <thead>
                    <tr>
                        <th width="6%">Imagen</th>
                        <th>Nombre del producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th width="20%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle"><img src="assets/img/prod10.png" width="80px"  alt=""></td>
                        <td class="align-middle">
                            <h6><strong>Silver Watch</strong></h6>
                            <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                        </td>
                        <td class="align-middle">$200</td>
                        <td class="align-middle"><span class="text-danger">Out of Stock</span></td>
                        <td class="align-middle text-center">
                            <button class="btn btn-link text-s p-1"><i class="fas fa-box-open"></i></button>
                            <button class="btn btn-link text-primary p-1"><i class="far fa-image"></i></button>
                            <button class="btn btn-link text-secondary p-1"><i class="fas fa-luggage-cart"></i></i></button>
                            <button class="btn btn-link text-success p-1"><i class="fas fa-sync"></i></button>
                            <button class="btn btn-link text-danger p-1"><i class="far fa-trash-alt"></i></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/Product Listing-->

    <div class="col-12">

<div class="card">
  <div class="card-header">


    <h3 class="card-title" style="font-size: 15px;">Hasta el momento hay: '<b style="color: blue;"> n</b>' usuarios registrados.</h3>         
  </div>
  <!-- /.card-header -->

  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Usuario</th>
          <th>Correo</th>
          <th>Empresa</th>
          <th>Rol</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> idUsuario </td>
          <td> Nombres </td>
          <td> Apellidos </td>
          <td> NombreUsuario </td>
          <td> Correo</td>
          <td>RazonSocial</td>
          <td>Descripcion</td>
          <td >
            <a style="font-size: 12px; color: green" href=""><i class="fas fa-pen" style="color:#3BA7E1; width: 40px;"></i></i></a>                      
            <a style="font-size: 12px; color: red;" href=""><i class="fas fa-trash-alt" style="color: red"></i></i></a>
          </td>   
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
@endsection

@section('script')
<!-- DataTables -->
<script src="/../../../public/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/s../../../public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>



  <script>
    $(function () {
      $('#example1').DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });



var table = $('#example1').DataTable({
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "todo"]],
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ - _END_ de un total de  _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
});    
  </script>



<!-- DataTables  & Plugins -->
<script src="/../../../public/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/../../../public/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/../../../public/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/../../../public/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/../../../public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection