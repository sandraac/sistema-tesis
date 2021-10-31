
@extends('layout.plantilla')

@section('contenido')
<section class="full-box page-content scroll">
	<div class="full-box page-header">
        <h3 class="text-left text-uppercase">
            <i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto
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
    
    <div class="container-fluid">
        <form class="form-neon FormularioAjax" action="" method="POST" data-form="save" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="modulo_producto" value="registrar">
            <fieldset>
                <legend><i class="fas fa-barcode"></i> &nbsp; Código y SKU</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group">
                                <label for="producto_codigo" class="bmd-label-floating">Código de barras &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control input-barcode" name="producto_codigo_reg" id="producto_codigo" maxlength="70">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group">
                                <label for="producto_sku" class="bmd-label-floating">SKU</label>
                                <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control input-barcode" name="producto_sku_reg" id="producto_sku" maxlength="70">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-box"></i> &nbsp; Información del producto</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group bmd-form-group">
                                <label for="producto_nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\- ]{1,97}" class="form-control input-barcode" name="producto_nombre_reg" id="producto_nombre" maxlength="97">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="producto_stock_total" class="bmd-label-floating">Stock o existencias &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9]{1,20}" class="form-control" name="producto_stock_total_reg" id="producto_stock_total" maxlength="20">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="producto_stock_minimo" class="bmd-label-floating">Stock mínimo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9]{1,9}" class="form-control" name="producto_stock_minimo_reg" id="producto_stock_minimo" maxlength="9">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_unidad" class="bmd-label-floating">Presentación del producto &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <select class="form-control" name="producto_unidad_reg" id="producto_unidad">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option value="Unidad">1 - Unidad</option><option value="Libra">2 - Libra</option><option value="Kilogramo">3 - Kilogramo</option><option value="Caja">4 - Caja</option><option value="Paquete">5 - Paquete</option><option value="Lata">6 - Lata</option><option value="Galon">7 - Galon</option><option value="Botella">8 - Botella</option><option value="Tira">9 - Tira</option><option value="Sobre">10 - Sobre</option><option value="Bolsa">11 - Bolsa</option><option value="Saco">12 - Saco</option><option value="Tarjeta">13 - Tarjeta</option><option value="Otro">14 - Otro</option>                            </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_precio_compra" class="bmd-label-floating">Precio de compra (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_compra_reg" value="0.00" id="producto_precio_compra" maxlength="25">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_precio_venta" class="bmd-label-floating">Precio de venta (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_venta_reg" value="0.00" id="producto_precio_venta" maxlength="25">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_precio_venta_mayoreo" class="bmd-label-floating">Precio de venta por mayoreo (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_venta_mayoreo_reg" value="0.00" id="producto_precio_venta_mayoreo" maxlength="25">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_descuento" class="bmd-label-floating">Descuento (%) en venta &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <input type="text" pattern="[0-9]{1,2}" class="form-control" name="producto_descuento_reg" value="0" id="producto_descuento" maxlength="2">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group">
                                <label for="producto_marca" class="bmd-label-floating">Marca</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="producto_marca_reg" id="producto_marca" maxlength="30">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group bmd-form-group">
                                <label for="producto_modelo" class="bmd-label-floating">Modelo</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="producto_modelo_reg" id="producto_modelo" maxlength="30">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-calendar-alt"></i> &nbsp; Vencimiento del producto</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group is-filled">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="producto_vencimiento_reg" value="Si"><span class="bmd-radio"></span>
                                            <i class="far fa-check-circle fa-fw"></i> &nbsp; Si vence
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="producto_vencimiento_reg" value="No" checked=""><span class="bmd-radio"></span>
                                            <i class="far fa-times-circle fa-fw"></i> &nbsp; No vence
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group is-filled">
                                    <label for="producto_fecha_vencimiento" class="bmd-label-static">Fecha de vencimiento (día/mes/año)</label>
                                    <input type="date" class="form-control" name="producto_fecha_vencimiento_reg" id="producto_fecha_vencimiento" maxlength="30" value="2021-10-06">
                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-history"></i> &nbsp; Garantía de fabrica</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group is-filled">
                                    <label for="producto_garantia_unidad" class="bmd-label-floating">Unidad de tiempo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[0-9]{1,2}" class="form-control input-barcode" name="producto_garantia_unidad_reg" id="producto_garantia_unidad" maxlength="2" value="0">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group bmd-form-group is-filled">
                                    <label for="producto_garantia_tiempo" class="bmd-label-floating">Tiempo de garantía &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <select class="form-control" name="producto_garantia_tiempo_reg" id="producto_garantia_tiempo">
                                        <option value="N/A">1 - N/A</option><option value="Dias">2 - Dias</option><option value="Semanas">3 - Semanas</option><option value="Mes">4 - Mes</option><option value="Meses">5 - Meses</option><option value="Año">6 - Año</option><option value="Años">7 - Años</option>                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-truck-loading"></i> &nbsp; Proveedor, categoría &amp; estado</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_proveedor" class="bmd-label-floating">Proveedor &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <select class="form-control" name="producto_proveedor_reg" id="producto_proveedor">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option value="3">1 - Truper</option><option value="4">2 - Ferrepat</option><option value="6">3 - YAPPA  riobanba</option><option value="7">4 - Distribuidora marca</option><option value="10">5 - Farmacia 24</option><option value="11">6 - Microsoft</option><option value="13">7 - mario hidalgoa</option><option value="14">8 - PAN GENESIS</option><option value="16">9 - test</option><option value="17">10 - INTCOMEX</option><option value="18">11 - Farmacia vida</option><option value="21">12 - Grupo Fibel</option><option value="23">13 - Hhhhhh</option><option value="24">14 - Framacia enrique</option><option value="25">15 - FERIA BARRIO LINDO</option><option value="26">16 - SPIRIT</option><option value="29">17 - jose lus</option><option value="32">18 - prueba</option><option value="33">19 - Farmacia Sana sana</option><option value="34">20 - joshe</option><option value="35">21 - pepito12888</option><option value="36">22 - jose</option><option value="37">23 - inventores SA</option><option value="38">24 - Jorge Flores</option><option value="39">25 - Agricultor 1</option><option value="40">26 - Noveltyc</option><option value="41">27 - Trasporte ejemplo</option><option value="42">28 - Montesdeoca Salazar Luis German</option><option value="43">29 - TRANSCOSTACAÑARI S.A.</option><option value="44">30 - TRANSPORTE BASTIDAS RUIZ DELIVERYCOM S.A.</option><option value="45">31 - NPD GLOBAL  SUPPLIERS S.A.</option><option value="46">32 - VETANRO LOGISTICS S.A. VETLOGISA</option><option value="47">33 - Torres Romero Gina Patricia</option><option value="48">34 - Suriaga Vasquez Jorge Alfredo</option><option value="49">35 - Negolevel S.A.</option><option value="50">36 - Bresson S.A.</option><option value="51">37 - CROPARSA S.A.</option><option value="52">38 - VILLEGAS FREIRE LAURA ESTHELA</option><option value="53">39 - CAJAMARCA LOPEZ GUIDO PATRICIO</option><option value="54">40 - Luzuriaga Iñiguez Milton Diogenes</option><option value="55">41 - GLOBALPACIFIC</option><option value="56">42 - Llerena Carrera Carlos Alberto</option><option value="57">43 - VIVERO DE CACAO ORBE</option><option value="58">44 - CARTOPEL S.A.I</option><option value="59">45 - ROMERO GUAMAN NESTOR ROBERTO</option><option value="60">46 - PAREDES CEDILLO CLARA ELENA</option><option value="61">47 - STARCARGO CIA. LTDA</option><option value="62">48 - FARLETZA S.A.</option><option value="63">49 - VERA VILLAGOMEZ RUBEN LIZARDO</option><option value="64">50 - MARDIEMPRE S.A.</option><option value="65">51 - MANCHENO MASSON MIGUEL HERNAN</option><option value="66">52 - PEREZ AREVALO JORGE OMAR</option><option value="67">53 - PAZMIÑO JOSE VICENTE</option><option value="68">54 - IBO S.A.</option><option value="69">55 - SOLUFIT S.A.</option><option value="70">56 - BIZARGORRI S.A.</option><option value="71">57 - RUBIANES FREIRE SILVIA RUTH</option><option value="72">58 - OXALIS S.A.</option><option value="73">59 - MARIA FERNANDA GOMEZ ZAMORA</option><option value="74">60 - CITIKOLD SA</option><option value="75">61 - CAÑARTE AGUA CARLOS FRANKLIN</option><option value="77">62 - MYCORGANIC S.A.</option><option value="78">63 - AGROCOMERCIO EL TRIUNFO</option><option value="79">64 - TRANSCOCHANCAY S.A.</option><option value="80">65 - PESANTEZ SANMARTIN LIDIA PATRICIA</option><option value="81">66 - ANDRADE SALAZAR EDGAR DAVID</option><option value="82">67 - ROMERO HERNANDEZ DIONISIO</option><option value="83">68 - TRANSPORTE Y MAQUINARIAS RIVECH</option><option value="84">69 - AGRODRIP SA</option><option value="85">70 - juan denos</option><option value="86">71 - Papelplast</option>                            </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_categoria" class="bmd-label-floating">Categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                <select class="form-control" name="producto_categoria_reg" id="producto_categoria">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option value="1">1 - Tabletas</option><option value="2">2 - belleza</option><option value="3">3 - Hogar y Jardin</option><option value="4">4 - Insumos médicos</option><option value="5">5 - MERCADO</option><option value="6">6 - Tornillos</option><option value="7">7 - Decoracion</option><option value="8">8 - Chocolates</option><option value="10">9 - Nueva</option><option value="12">10 - ropa</option><option value="13">11 - ssds</option><option value="14">12 - Snack</option><option value="16">13 - Repuwstos</option><option value="20">14 - Peliculas Disney</option><option value="21">15 - bebidasalll</option><option value="25">16 - Vitaminas</option><option value="26">17 - deditos</option><option value="27">18 - ROPA DE DAMA</option><option value="30">19 - Ventiladores</option><option value="32">20 - Cuidado personal</option><option value="33">21 - Parlante Computo</option><option value="34">22 - SELFIE</option><option value="36">23 - sdvsfsfvwsvf90870vasv</option><option value="37">24 - Regalos</option><option value="38">25 - Agua</option><option value="39">26 - Hamburguesas Sencillas</option><option value="40">27 - Medida fruta</option><option value="41">28 - Calibres</option><option value="42">29 - Trasporte</option><option value="44">30 - perfumeria</option><option value="45">31 - mano</option><option value="46">32 - pasta</option><option value="47">33 - tronco</option><option value="48">34 - CITY</option><option value="49">35 - Jabon</option>                            </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="producto_estado" class="bmd-label-floating">Estado del producto</label>
                                <select class="form-control" name="producto_estado_reg" id="producto_estado">
                                    <option value="Habilitado" selected="">Habilitado</option>
                                    <option value="Deshabilitado">Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="far fa-image"></i> &nbsp; Foto o imagen del producto</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="file" class="" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg"><br>
                                <small class="text-muted">Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB. Resolución recomendada 300px X 300px o superior manteniendo el aspecto cuadrado (1:1)</small>
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



