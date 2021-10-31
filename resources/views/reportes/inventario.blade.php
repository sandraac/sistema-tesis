@extends('layout.plantilla')

@section('contenido')
<h5 class="mb-0" ><strong><i class="fa fa-reply"> </i> Reporte de inventario</strong></h5>
<span class="text-secondary">En el módulo REPORTES podrá ver, generar e imprimir reportes de ventas e inventario en formato PDF.</span>
<div class="row mt-3">
    <div class="col-sm-12">
        <!--Summernote editor with div element-->
        <div class="mt-2 mb-2 button-container">
            <div class="text-center">
                <span class="p-2"><a class="text-info" href="#"><i class="fa fa-search"> </i> Reportes de ventas</a></span>
                <span class="p-2"><a class="text-info" href="#"><i class="fa fa-reply"> </i> Reportes de inventario</a></span>
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
            <h3 class="m-2 p-3">Generar reporte de inventario personalizado</h3>
            <form class="form-horizontal mt-4 mb-5">
                <div class="form-group row ml-5 pl-5 mr-5 pr-5">
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2 ml-5">Ordenar por</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Nombre (ascendente)</option>
                                            <option>Nombre (descendente)</option>
                                            <option>Stock (mayor - menor)</option>
                                            <option>Stock (menor - mayor)</option>
                                        </select>
                                    </div>
                                </div>
            </form>
                <button type="button" class="btn btn-theme"><i class="fa fa-search"> </i> Generar reporte</button>
            </div>              
        </div>
     </div>
</div>
<!--Footer-->
<div class="row mt-5 mb-4 footer">
    <div class="col-sm-8">
        <span>&copy; All rights reserved 2019 designed by <a class="text-info" href="#">A-Fusion</a></span>
    </div>
    <div class="col-sm-4 text-right">
        <a href="#" class="ml-2">Contact Us</a>
        <a href="#" class="ml-2">Support</a>
    </div>
</div>
<!--Footer-->

@endsection