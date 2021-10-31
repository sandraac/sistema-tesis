
@extends('layout.plantilla')

@section('contenido')
<section class="full-box page-content scroll">
	<div class="full-box page-header">
        <h3 class="text-left text-uppercase">
        <i class="fas fa-shipping-fast fa-fw"></i> &nbsp; Nuevo proveedor
        </h3>
        <p class="text-justify">En el módulo PROVEEDORES usted podrá registrar los proveedores de productos a los cuales usted les compra productos o mercancía. Además, podrá actualizar los datos de los proveedores, ver todos los proveedores registrados en el sistema, buscar proveedores en el sistema o eliminarlos si así lo desea. 
        </p>
    </div>

                <!--Dashboard widget-->
                <div class="mt-1 mb-6 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-tags fa-fw"></i> &nbsp; Nuevo proveedor
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de proveedores
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar categoría
                            </a>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->

<div class="container-fluid">
    <form class="form-neon " action="" method="POST" data-form="save" autocomplete="off">
        <input type="hidden" name="modulo_proveedor" value="registrar">
        <fieldset>
            <legend><i class="far fa-address-card"></i> &nbsp; Datos del proveedor</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="proveedor_tipo_documento" class="bmd-label-floating">Tipo de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <select class="form-control" name="proveedor_tipo_documento_reg" id="proveedor_tipo_documento">
                                <option value="" selected="">Seleccione una opción</option>
                                <option value="DNI">1 - DNI</option><option value="Cedula">2 - Cedula</option><option value="NIT">3 - NIT</option><option value="RUC">4 - RUC</option><option value="Otro">5 - Otro</option>                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_numero_documento" class="bmd-label-floating">Numero de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-Z0-9-]{7,30}" class="form-control" name="proveedor_numero_documento_reg" id="proveedor_numero_documento" maxlength="30">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ., ]{4,75}" class="form-control" name="proveedor_nombre_reg" id="proveedor_nombre" maxlength="75">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_direccion" class="bmd-label-floating">Dirección</label>
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,97}" class="form-control" name="proveedor_direccion_reg" id="proveedor_direccion" maxlength="97">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="proveedor_estado" class="bmd-label-floating">Estado &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <select class="form-control" name="proveedor_estado_reg" id="proveedor_estado">
                                <option value="Habilitado" selected="">1 - Habilitado</option>
                                <option value="Deshabilitado">2 - Deshabilitado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <legend><i class="fas fa-phone-volume"></i> &nbsp; Información de contacto</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_encargado" class="bmd-label-floating">Nombre del encargado</label>
                            <input type="text" pattern="[a-zA-Z ]{4,70}" class="form-control" name="proveedor_encargado_reg" id="proveedor_encargado" maxlength="70">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_telefono" class="bmd-label-floating">Teléfono</label>
                            <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="proveedor_telefono_reg" id="proveedor_telefono" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="proveedor_email" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" name="proveedor_email_reg" id="proveedor_email" maxlength="50">
                        </div>
                    </div>               
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
        <p class="text-center">
            <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
        </p>
    </form>
</div>		</section>
@endsection



