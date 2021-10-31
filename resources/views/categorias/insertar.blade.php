
@extends('layout.plantilla')

@section('contenido')
    <h2 class="mb-0" ><i class="fab fas fa-tags fa-fw"></i><strong>NUEVA CATEGORÍA</strong></h2><br>
    <h6>
        <span class="text-secondary">
            <p class="text-justify">
                En el módulo CATEGORÍA usted podrá registrar las categorías que servirán para agregar productos y 
                también podrá ver los productos que pertenecen a una categoría determinada. Además de lo antes mencionado, 
                puede actualizar los datos de las categorías, realizar búsquedas de categorías o eliminarlas si así lo desea.
            </p>
        </span>
    </h6><br>


    <!--Dashboard widget-->
    <div class="mt-1 mb-6 button-container">
        <div class="row pl-0">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                <a class="active" href="">
                    <i class="fas fa-tags fa-fw"></i> &nbsp; Nueva categoría
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                <a class="active" href="">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías
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
        <form class="form-neon FormularioAjax" action="" method="POST" data-form="save" autocomplete="off">
            <input type="hidden" name="modulo_categoria" value="registrar">
            <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información de la categoría</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group">
                                <label for="categoria_nombre" class="bmd-label-floating">Nombre de la categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[a-zA-Z0-99áéíóúÁÉÍÓÚñÑ ]{3,40}" class="form-control" name="categoria_nombre_reg" id="categoria_nombre" maxlength="40">
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group">
                                <label for="categoria_ubicacion" class="bmd-label-floating">Pasillo o ubicación de la categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{3,100}" class="form-control" name="categoria_ubicacion_reg" id="categoria_ubicacion" maxlength="100">
                            </div>
                        </div> -->
                        <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="categoria_estado" class="bmd-label-floating">Estado de la categoría</label>
                                <select class="form-control" name="categoria_estado_reg" id="categoria_estado">
                                    <option value="Habilitada" selected="">Habilitada</option>
                                    <option value="Deshabilitada">Deshabilitada</option>
                                </select>
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
@endsection



