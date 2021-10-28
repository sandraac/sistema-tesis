@extends('layout.plantilla')

@section('contenido')
    <section class="full-box page-content scroll">
        <div class="full-box page-header">
            <h3 class="text-left text-uppercase">
                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
            </h3>
            <p class="text-justify">
                En el módulo PRODUCTOS podrá agregar nuevos productos al sistema, actualizar datos de los productos, 
                eliminar o actualizar la imagen de los productos, imprimir códigos de barras o SKU de cada producto, 
                buscar productos en el sistema, ver todos los productos en almacén, ver los productos más vendido y 
                filtrar productos por categoría.
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
                    <a href="http://systems.designlopers.com/SVI/product-sold/">
                        <i class="fas fa-coins"></i> &nbsp; Lo más vendido
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="http://systems.designlopers.com/SVI/product-category/">
                        <i class="fas fa-tags"></i> &nbsp; Productos por categoría
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="http://systems.designlopers.com/SVI/product-expiration/">
                        <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="http://systems.designlopers.com/SVI/product-minimum/">
                        <i class="fas fa-stopwatch-20"></i> &nbsp; Productos en stock mínimo
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a href="http://systems.designlopers.com/SVI/product-search/">
                        <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
                    </a>
                </div>
            </div>
        </div>
        <!--/Dashboard widget-->
        <div class="container-fluid">
            <form class="form-neon FormularioAjax" action="" data-form="default" method="POST" autocomplete="off">
                <input type="hidden" name="modulo" value="producto">
                <div class="container-fluid">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group">
                                <label for="inputSearch" class="bmd-label-floating">¿Qué producto estas buscando?</label>
                                <input type="text" class="form-control" name="busqueda_inicial" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" id="inputSearch" maxlength="30">
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-center" style="margin-top: 40px;">
                                <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection