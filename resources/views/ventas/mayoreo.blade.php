@extends('layout.plantilla')
@section('contenido')
<section class="full-box page-content scroll">

<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <i class="fas fa-parachute-box fa-fw"></i> &nbsp; VENTA POR MAYOREO   
    </h3>
    <p class="text-justify">
    En el módulo VENTAS podrá realizar ventas de productos, puede usar lector de código de barras o hacerlo de forma manual digitando el código del producto (debe de configurar estas opciones en ajustes de su cuenta). También puede ver las ventas realizadas y buscar ventas en el sistema.    </p>
</div>

                <!--Dashboard widget-->
                <div class="mt-1 mb-6 button-container" >
                    <div class="row pl-0">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a href="">
                                <i class="fas fa-cart-plus fa-fw"></i> &nbsp; Nueva venta
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a href="">
                                <i class="fas fa-parachute-box fa-fw"></i> &nbsp; Venta por mayoreo
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-coins fa-fw"></i> &nbsp; Ventas realizadas
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a href="">
                                <i class="fab fa-creative-commons-nc fa-fw"></i> &nbsp; Ventas pendientes
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a href="">
                                <i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Fecha)
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <a href="">
                                <i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Código)
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
                    <div class="alert alert-light text-center" role="alert" style="font-size: 12px;">
                                                    <p>Está utilizando la <strong class="text-uppercase">configuración manual</strong> con lectura de <strong class="text-uppercase">códigos SKU</strong>, para agregar productos debe de digitar el código SKU en el campo "Código de producto" y luego presionar &nbsp; <strong class="text-uppercase"><i class="far fa-check-circle"></i> &nbsp; Agregar producto</strong>. También puede agregar el producto mediante la opción &nbsp; <strong class="text-uppercase"><i class="fas fa-search"></i> &nbsp; Buscar producto</strong></p>
                                                <hr>
                        <p class="mb-0">Puede cambiar esta configuración en los &nbsp; <a href=""><i class="fas fa-user-cog"></i>&nbsp; ajustes de su cuenta</a>.</p>
                    </div>
                    <div class="container-fluid">
                        <form class="row align-items-center" id="sale-barcode-form" autocomplete="off">
                            <div class="col-12 col-md-3">
                                <button type="button" class="btn btn-primary" id="btn_modal_buscar_codigo"><i class="fas fa-search"></i> &nbsp; Buscar producto</button>
                            </div>
                                                        <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="barcode-input" class="bmd-label-static">Código de producto</label>
                                    <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control sale-input-barcode" id="sale-barcode-input" maxlength="70">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="button" class="btn btn-primary" ><i class="far fa-check-circle"></i> &nbsp; Agregar producto</button>
                            </div>
                        </form>
                    </div><br>
                                        <div class="table-responsive">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="bg-info">
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Código de barra</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cant.</th>
                                    <th scope="col">Precio</th>
                                                                        <th scope="col">Subtotal</th>
                                    <th scope="col">Actualizar</th>
                                    <th scope="col">Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr class="text-center">
                                    <th colspan="9">No hay productos agregados</th>
                                </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <h3 class="text-center text-uppercase">Datos de la venta</h3>
                    <hr>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_fecha" class="bmd-label-static">Fecha</label>
                        <input type="date" class="form-control" name="venta_fecha_reg" id="venta_fecha" value="2021-10-14" readonly="">
                    </div>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_caja" class="bmd-label-static">Caja</label>
                        <input type="text" class="form-control" id="venta_caja" value="Caja #1 - Caja principal" readonly="">
                    </div>
                    
                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_cliente" class="bmd-label-static">Cliente</label>
                                                <div class="container-fluid">
                            <div class="row">
                                <div class="col-10 text-center">
                                    <input type="text" class="form-control" id="venta_cliente" value="Publico General" readonly="">
                                </div>
                                <div class="col-2 text-center">
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" id="btn_modal_cliente" data-placement="top" data-content="Agregar cliente" data-original-title="" title="">
                                        <i class="fas fa-user-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                                            </div>

                     
                    <form name="formsale">
                    
                    <label>Tipo de pago</label>
                    <div class="form-group text-center">
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" type="radio" name="venta_tipo_venta_reg" value="Contado" id="venta_radio_contado" checked="">
                            <label class="form-check-label text-secondary" for="venta_radio_contado"><i class="fas fa-money-bill-alt"></i> &nbsp; Contado</label>
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" type="radio" name="venta_tipo_venta_reg" value="Credito" id="venta_radio_credito">
                            <label class="form-check-label text-secondary" for="venta_radio_credito"><i class="fab fa-cc-visa"></i> &nbsp; Credito</label>
                        </div>
                    </div>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_descuento" class="bmd-label-static">Descuento de venta (%)</label>
                        <div class="container-fluid">
                                                        <div class="row">
                                <div class="col-10 text-center">
                                    <input type="text" class="form-control" id="venta_descuento" value="0" pattern="[0-9]{1,2}" maxlength="2">
                                </div>
                                <div class="col-2 text-center">
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Aplicar Descuento" onclick="aplicar_descuento()" data-original-title="" title="">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </button>
                                </div>
                            </div>
                                                    </div>
                    </div>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_abono" class="bmd-label-floating">Total pagado por cliente &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                        <input type="text" class="form-control" name="venta_abono_reg" id="venta_abono" value="0.00" pattern="[0-9.]{1,25}" maxlength="25">
                    </div>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="venta_cambio" class="bmd-label-floating">Cambio devuelto a cliente</label>
                        <input type="text" class="form-control" id="venta_cambio" value="0.00" readonly="">
                    </div>

                                            <ul class="list-group list-unstyled">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Subtotal
                                <span class="badge badge-pill"> + $0.00 USD</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                ITBIS (18%)
                                <span class="badge badge-pill"> + $0.00 USD</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Descuento
                                <span class="badge badge-pill"> - $0.00 USD</span>
                            </li>
                            <li><hr></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                Total
                                <span class="badge badge-pill"> $0.00 USD</span>
                            </li>
                        </ul>
                                                <p class="text-center">
                            <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                        </p>
                        <input type="hidden" value="0.00" id="venta_total_descuento">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
            
            </section>

@endsection
