@extends('layout.plantilla')

@section('contenido')
<section class="full-box page-content scroll">
	<div class="full-box page-header">
        <h3 class="text-left text-uppercase">
            <i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Compras realizadas
        </h3>
        <p class="text-justify">
            En el módulo COMPRAS usted podrá registrar compras de productos ya sea nuevos o ya registrados en sistema. También puede ver la lista de todas las compras realizadas, buscar compras y ver información más detallada de cada compra. 
        </p>
    </div>
            
    <!--Dashboard widget-->
    <div class="mt-1 mb-6 button-container" >
        <div class="row pl-0">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                <a href="">
	                <i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Nueva compra
	            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                <a class="active" href="">
	                <i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Compras realizadas
	            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                <a href="">
	                <i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar compra
	            </a>
            </div>
        </div>
    </div>
    <!--/Dashboard widget-->
        
    <div class="container-fluid">
            <div class="form-neon">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <p class="text-center">
                            Ingrese el código de barras del producto y luego haga clic en <strong>“Verificar producto”</strong> 
                            para cargar los datos en caso el producto ya este registrado, en caso contrario se cargará el formulario 
                            para registrar un nuevo producto.
                        </p>
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-8">
                                    <div class="form-group bmd-form-group">
                                        <label for="barcode-input" class="bmd-label-floating">Código de barras</label>
                                        <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control input-barcode" id="barcode-input" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <button type="button" class="btn btn-primary"><i class="far fa-check-circle"></i> &nbsp; Verificar producto</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="bg-info">
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Código de barra</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th colspan="8">No hay productos agregados</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h3 class="text-center text-uppercase">Datos de la compra</h3>
                        <hr>
                        <form>                        
                            <div class="form-group bmd-form-group is-filled">
                                <label for="compra_fecha" class="bmd-label-static">Fecha &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="date" class="form-control input-barcode" name="compra_fecha_reg" id="compra_fecha" value="2021-10-13">
                            </div>
                            <div class="form-group bmd-form-group is-filled">
                                <label for="compra_proveedor" class="bmd-label-floating">Proveedor &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <select class="form-control" name="compra_proveedor_reg" id="compra_proveedor">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option value="3">1 - Truper</option>
                                    <option value="4">2 - Ferrepat</option>
                                    <option value="6">3 - YAPPA  riobanba</option>
                                </select>
                            </div>
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Subtotal
                                    <span class="badge badge-pill">$0.00 USD</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ITBIS (18%)
                                    <span class="badge badge-pill">$0.00 USD</span>
                                </li>
                                <li><hr></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Total
                                    <span class="badge badge-pill">$0.00 USD</span>
                                </li>
                            </ul>
                            <p class="text-center">
                                <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection