@extends('layout.plantilla')

@section('contenido')

    <div class="full-box page-header">
        <h3 class="text-left text-uppercase">
            <i class="fas fa-box fa-fw"></i> &nbsp; Productos en almacén
        </h3>
        <p class="text-justify">En el módulo PRODUCTOS podrá agregar nuevos productos al sistema, actualizar datos de los productos, eliminar o actualizar la imagen de los productos, imprimir códigos de barras o SKU de cada producto, buscar productos en el sistema, ver todos los productos en almacén, ver los productos más vendido y filtrar productos por categoría.
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

    <div class="row">
        <div class="col-12 d-flex">
            <div class="col-3">
                <!--Product Listing-->
                <div class="product-category">
                    <h5 class="text-uppercase text-center"><i class="fas fa-tags"></i> &nbsp; Categorías</h5>
                    <ul class="list-unstyled text-center product-category-list">
                        <li>
                            <a href="">Tabletas <span class="badge badge-pill badge-info">29</span></a>
                        </li>
                        <li>
                            <a href="">belleza <span class="badge badge-pill badge-info">33</span></a>
                        </li>
                        <li>
                            <a href="">Hogar y Jardin <span class="badge badge-pill badge-info">12</span></a>
                        </li>
                        <li>
                            <a href="">Insumos médicos <span class="badge badge-pill badge-info">8</span></a>
                        </li>
                        <li>
                            <a href="">MERCADO <span class="badge badge-pill badge-info">17</span></a>
                        </li>
                        <li>
                            <a href="">Tornillos <span class="badge badge-pill badge-info">6</span></a>
                        </li>
                        <li>
                            <a href="">Decoracion <span class="badge badge-pill badge-info">8</span></a>
                        </li>
                        <li>
                            <a href="">Chocolates <span class="badge badge-pill badge-info">6</span></a>
                        </li>
                        <li>
                            <a href="">Videojuegos <span class="badge badge-pill badge-info">2</span></a>
                        </li>
                    </ul>
                </div>
                <!--/Product Listing-->
            </div>
            <div class="col-9">
                <!--Product Listing-->
                <div class="product-list  ">              
                    <div class="row border-bottom mb-4">
                        <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Listado de productos</h6></div>
                        <div class="col-sm-4 text-right pb-3">
                            <button class="btn btn-round btn-theme"><i class="fa fa-plus"></i> Añadir productos</button>
                        </div>
                    </div>                
                    <div class="table-responsive product-list">                      
                        <table class="table table-bordered table-striped mt-3" id="productList">
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
            </div>
        </div>
    </div>                
@endsection