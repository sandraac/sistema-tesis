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
    
<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">
     
    <div class="row border-bottom mb-4">
        <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Lista de devoluciones</h6></div> 
         </div>   
        <div class="table-responsive product-list">
            <table class="table table-bordered table-striped mt-3" id="productList">
                <thead>
                     <tr>
                        <th style="width: 10px;" class="p-0 pr-4 align-middle">
                            <div class="form-check-box cta">
                                <span class="color1">
                                    <input type="checkbox" id="orderAll">
                                        <label for="orderAll"></label>
                                                </span>
                                            </div>
                                        </th>
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Tipo</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                        <th>Vendedor</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de venta	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de venta	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de venta	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de venta	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de venta	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">15/09/2018</td>
                                        <td class="align-middle">
                                        Devolución de compra	
                                        </td>
                                        <td class="align-middle">ACEITES PARA BABYS</td>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">$600.00 USD</td>
                                        <td class="align-middle">Andres Torres Principal</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/Order Listing-->

                    <!--Order Info Modal-->
                    <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row">Item</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Red Shoes</td>
                                                <td>2</td>
                                                <td>$400</td>
                                                <td>$800</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Blue shirt</td>
                                                <td>1</td>
                                                <td>$400</td>
                                                <td>$400</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Knickers</td>
                                                <td>3</td>
                                                <td>$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Info Modal-->

                    <!--Order Update Modal-->
                    <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="row">Item</th>
                                                <th class="order-qty-head">Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">01</td>
                                                <td scope="row" class="align-middle">Red Shoes</td>
                                                <td class="text-center align-middle"><input type="text" value="2" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$800</td>
                                                <td style="width: 120px;" class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">02</td>
                                                <td class="align-middle" scope="row">Blue shirt</td>
                                                <td class="text-center align-middle"><input type="text" value="1" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">03</td>
                                                <td class="align-middle" scope="row">Knickers</td>
                                                <td class="text-center align-middle"><input type="text" value="3" class="order-qty"></td>
                                                <td class="align-middle">$300</td>
                                                <td class="align-middle">$900</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Update Modal-->
                </div>
    
@endsection