@extends('layout.plantilla')

@section('contenido')
<h5 class="mb-0" ><strong><i class="fa fa-reply"> </i> Devoluciones realizadas</strong></h5>
<span class="text-secondary">En el módulo DEVOLUCIONES podrá ver el listado de todas las devoluciones de compras y ventas realizadas. Además, podrá buscar devoluciones por fecha.</span>
<div class="row mt-3">
    <div class="col-sm-12">
        <!--Summernote editor with div element-->
        <div class="mt-2 mb-2 button-container">
            <div class="text-center">
                <span class="p-2"><a class="text-info" href="#"><i class="fa fa-search"> </i> Devoluciones realizadas</a></span>
                <span class="p-2"><a class="text-info" href="#"><i class="fa fa-reply"> </i> Devoluciones realizadas</a></span>
            </div>                
        <!--/Summernote with div element-->
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12">
        <!--Invoice-->
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm lh-sm">
            <div class="text-center">
                <div class="row mt-3 mb-4">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="invoice-from">
                        <p class="mb-2">Fecha inicial (día/mes/año)</p>
                            <input type="date">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="invoice-from">
                        <p class="mb-2">Fecha final (día/mes/año)</p>
                            <input type="date">
                        </div>
                    </div>
                    
                </div>
                <button type="button" class="btn btn-theme"><i class="fa fa-search"> </i> Buscar</button>
            </div>              
        </div>
     </div>
</div>

@endsection