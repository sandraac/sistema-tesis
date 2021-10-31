@extends('layout.plantilla')

@section('contenido')
	<section class="full-box page-content scroll">
		<div class="full-box page-header">
			<h3 class="text-left text-uppercase">
				<i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Compras realizadas
			</h3>
			<p class="text-justify">
				En el módulo COMPRAS usted podrá registrar compras de productos ya sea nuevos o ya registrados en sistema. 
				También puede ver la lista de todas las compras realizadas, buscar compras y ver información más detallada de cada compra. 
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
			<form class="form-neon FormularioAjax" action="" data-form="default" method="POST" autocomplete="off">
				<input type="hidden" name="modulo" value="compra">
				<div class="container-fluid">
					<div class="row justify-content-md-center">
						<div class="col-12 col-md-4">
							<div class="form-group bmd-form-group">
								<label for="fecha_inicio" class="bmd-label-static">Fecha inicial (día/mes/año)</label>
								<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" maxlength="30">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group bmd-form-group">
								<label for="fecha_final" class="bmd-label-static">Fecha final (día/mes/año)</label>
								<input type="date" class="form-control" name="fecha_final" id="fecha_final" maxlength="30">
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