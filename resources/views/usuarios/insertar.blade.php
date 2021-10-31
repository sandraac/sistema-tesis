
@extends('layout.plantilla')

@section('contenido')
    <section class="full-box page-content scroll">
		<div class="full-box page-header">
            <h3 class="text-left text-uppercase">
                <i class="fas fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
            </h3>
            <p class="text-justify">En el módulo USUARIO podrá registrar nuevos usuarios en el sistema ya sea un administrador o un cajero, también podrá ver la lista de usuarios registrados, buscar usuarios en el sistema, actualizar datos de otros usuarios y los suyos.
            </p>
        </div>

                <!--Dashboard widget-->
                <div class="mt-1 mb-6 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-tags fa-fw"></i> &nbsp; Nuevo usuario
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <a class="active" href="">
                                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario
                            </a>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->

<div class="container-fluid">
    <form class="form-neon FormularioAjax" action="" method="POST" data-form="save" autocomplete="off">
        <input type="hidden" name="modulo_usuario" value="registrar">
        <fieldset>
            <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="usuario_tipo_documento" class="bmd-label-floating">Tipo de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <select class="form-control" name="usuario_tipo_documento_reg" id="usuario_tipo_documento">
                                <option value="" selected="">Seleccione una opción</option>
                                <option value="DUI">1 - DUI</option><option value="DNI">2 - DNI</option><option value="Cedula">3 - Cedula</option><option value="Licencia">4 - Licencia</option><option value="Pasaporte">5 - Pasaporte</option><option value="Otro">6 - Otro</option>                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_numero_documento" class="bmd-label-floating">Numero de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-Z0-9-]{7,30}" class="form-control" name="usuario_numero_documento_reg" id="usuario_numero_documento" maxlength="30">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="usuario_cargo" class="bmd-label-floating">Cargo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <select class="form-control" name="usuario_cargo_reg" id="usuario_cargo">
                                <option value="" selected="">Seleccione una opción</option>
                                <option value="Administrador">1 - Administrador</option>
                                <option value="Cajero">2 - Cajero</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_nombre" class="bmd-label-floating">Nombres &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="usuario_nombre_reg" id="usuario_nombre" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_apellido" class="bmd-label-floating">Apellidos &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="usuario_apellido_reg" id="usuario_apellido" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_telefono" class="bmd-label-floating">Teléfono</label>
                            <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="usuario_telefono_reg" id="usuario_telefono" maxlength="20">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <legend><i class="fas fa-user-friends"></i> &nbsp; Genero</legend>
                        <div class="form-group bmd-form-group is-filled">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="usuario_genero_reg" value="Masculino" checked=""><span class="bmd-radio"></span>
                                    <i class="fas fa-male fa-fw"></i> &nbsp; Masculino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="usuario_genero_reg" value="Femenino"><span class="bmd-radio"></span>
                                    <i class="fas fa-female fa-fw"></i> &nbsp; Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <legend><i class="fas fa-barcode"></i> &nbsp; Configuración de lector de código de barras</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_lector_reg" value="Habilitado" checked=""><span class="bmd-radio"></span>
                                                <i class="far fa-check-circle fa-fw"></i> &nbsp; Usar lector
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_lector_reg" value="Deshabilitado"><span class="bmd-radio"></span>
                                                <i class="far fa-times-circle fa-fw"></i> &nbsp; No usar lector
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_tipo_codigo_reg" value="Barras" checked=""><span class="bmd-radio"></span>
                                                <i class="fas fa-barcode fa-fw"></i> &nbsp; Código barras
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_tipo_codigo_reg" value="SKU"><span class="bmd-radio"></span>
                                                <i class="fas fa-barcode fa-fw"></i> &nbsp; Código SKU
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <legend><i class="fas fa-cash-register"></i> &nbsp; Caja de ventas</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group bmd-form-group is-filled">
                            <select class="form-control" name="usuario_caja_reg">
                                <option value="" selected="">Seleccione una opción</option>
                                <option value="1">Caja No.1 (Caja principal)</option>
                                <option value="2">Caja No.2 (Andres Quiroz)</option>
                                <option value="3">Caja No.3 (qwerty)</option>
                                <option value="5">Caja No.7 (Caja Secundaria)</option>
                                <option value="6">Caja No.4201 (Erik)</option>
                                <option value="7">Caja No.5 (caja de ventas 0005)</option>
                                <option value="8">Caja No.56 (paracetamol)</option>
                                <option value="9">Caja No.132 (003pedro)</option>
                                <option value="10">Caja No.10 (ejemplo)</option>                      
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="text" pattern="[a-zA-Z0-9]{4,25}" class="form-control" name="usuario_usuario_reg" id="usuario_usuario" maxlength="25">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_email" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" name="usuario_email_reg" id="usuario_email" maxlength="50">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_clave_1" class="bmd-label-floating">Contraseña &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="password" class="form-control" name="usuario_clave_1_reg" id="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group">
                            <label for="usuario_clave_2" class="bmd-label-floating">Repetir contraseña &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <input type="password" class="form-control" name="usuario_clave_2_reg" id="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="usuario_estado" class="bmd-label-floating">Estado de la cuenta &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                            <select class="form-control" name="usuario_estado_reg" id="usuario_estado">
                                <option value="Activa" selected="">1 - Activa</option>
                                <option value="Deshabilitada">2 - Deshabilitada</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <div class="container-fluid">
            <legend><i class="fas fa-portrait"></i> &nbsp; Avatar</legend>
                <div class="row">
                    
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Male_2.png" checked=""><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_2.png" alt="Avatar_Male_2.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Male_1.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_1.png" alt="Avatar_Male_1.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_default_male.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_default_male.png" alt="Avatar_default_male.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Female_5.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_5.png" alt="Avatar_Female_5.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_default_female.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_default_female.png" alt="Avatar_default_female.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Female_1.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_1.png" alt="Avatar_Female_1.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Male_3.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_3.png" alt="Avatar_Male_3.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Female_4.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_4.png" alt="Avatar_Female_4.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Male_4.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_4.png" alt="Avatar_Male_4.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Male_5.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_5.png" alt="Avatar_Male_5.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled"><div class="radio radio-avatar-form">
                                            <label>
                                                <input type="radio" name="usuario_avatar_reg" value="Avatar_Female_3.png"><span class="bmd-radio"></span>
                                                <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_3.png" alt="Avatar_Female_3.png" class="img-fluid img-avatar-form">
                                            </label>
                                        </div></span>
                                    </div>
                                
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <span class="bmd-form-group is-filled">
                                            <div class="radio radio-avatar-form">
                                                <label>
                                                    <input type="radio" name="usuario_avatar_reg" value="Avatar_Female_2.png"><span class="bmd-radio"></span>
                                                    <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_2.png" alt="Avatar_Female_2.png" class="img-fluid img-avatar-form">
                                                </label>
                                            </div>
                                        </span>
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



