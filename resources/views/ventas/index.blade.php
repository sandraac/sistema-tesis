@extends('layout.plantilla')
@section('contenido')
<section class="full-box page-content scroll">
	<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <i class="fas fa-coins fa-fw"></i> &nbsp; Ventas realizadas
    </h3>
    <p class="text-justify">
    En el módulo VENTAS podrá realizar ventas de productos, puede usar lector de código de barras o hacerlo de forma manual digitando el código del producto (debe de configurar estas opciones en ajustes de su cuenta). También puede ver las ventas realizadas y buscar ventas en el sistema.
</p></div>

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

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Datatable-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                            <h6 class="mb-2">Datatable</h6>
                            
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!--/Datatable-->

                    </div>
                </div>		
            
            </section>

@endsection
