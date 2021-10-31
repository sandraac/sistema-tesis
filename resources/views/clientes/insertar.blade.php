
@extends('layout.plantilla')

@section('contenido')
    <section class="full-box page-content scroll">
		<div class="full-box page-header">
            <h3 class="text-left text-uppercase">
                <i class="fas fa-child fa-fw"></i> &nbsp; Nuevo cliente
            </h3>
            <p class="text-justify">
                En el módulo CLIENTE podrá registrar en el sistema los datos de sus clientes más frecuentes para realizar ventas, 
                además podrá realizar búsquedas de clientes, actualizar datos de sus clientes o eliminarlos si así lo desea.
            </p>
        </div>

        <!--Dashboard widget-->
        <div class="mt-1 mb-6 button-container">
            <div class="row pl-0">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a class="active" href="">
                        <i class="fas fa-tags fa-fw"></i> &nbsp; Nuevo cliente
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a class="active" href="">
                        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <a class="active" href="">
                        <i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente
                    </a>
                </div>
            </div>
        </div>
        <!--/Dashboard widget-->

        <div class="container-fluid">
            <form class="form-neon FormularioAjax" action="" method="POST" data-form="save" autocomplete="off">
                <input type="hidden" name="modulo_cliente" value="registrar">
                <fieldset>
                    <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group is-filled">
                                    <label for="cliente_tipo_documento" class="bmd-label-floating">Tipo de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <select class="form-control" name="" id="">
                                        <option value="" selected="">Seleccione una opción</option>
                                        <option value="DUI">1 - DUI</option>
                                        <option value="DNI">2 - DNI</option>
                                        <option value="Cedula">3 - Cedula</option>
                                        <option value="Licencia">4 - Licencia</option>
                                        <option value="Pasaporte">5 - Pasaporte</option>
                                        <option value="Otro">6 - Otro</option>                            
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_numero_documento" class="bmd-label-floating">Numero de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-Z0-9-]{7,30}" class="form-control" name="cliente_numero_docmento_reg" id="cliente_numero_documento" maxlength="30">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_nombre" class="bmd-label-floating">Nombres &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="35">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_apellido" class="bmd-label-floating">Apellidos &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="35">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br><br>
                <fieldset>
                    <legend><i class="fas fa-map-marked-alt"></i> &nbsp; Información de residencia</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_provincia" class="bmd-label-floating">Estado, provincia o departamento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" class="form-control" name="cliente_provincia_reg" id="cliente_provincia" maxlength="30">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_ciudad" class="bmd-label-floating">Ciudad o pueblo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" class="form-control" name="cliente_ciudad_reg" id="cliente_ciudad" maxlength="30">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_direccion" class="bmd-label-floating">Calle o dirección de casa &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="70">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br><br>
                <fieldset>
                    <legend><i class="far fa-address-book"></i> &nbsp; Información de contacto</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_telefono" class="bmd-label-floating">Teléfono &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label for="cliente_email" class="bmd-label-floating">Email</label>
                                    <input type="email" class="form-control" name="cliente_email_reg" id="cliente_email" maxlength="50">
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
        </div>		

    </section>
@endsection



