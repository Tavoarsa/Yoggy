@extends('layouts.test')

@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>            
                <i class="fa fa-user" aria-hidden="true"></i>Producto
                  <a href="{{ route('product.create') }}" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Producto
                    </a>
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th> 
                            <th>Eliminar</th>                          
                            <th>Codigo</th>
                            <th>Proveedor</th>
                             <th>Categoria</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Descuento</th>                           
                            <th>Nivel de Reorden</th>
                            <th>Imagen</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product.edit', $product) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                 <td>
                                    {!! Form::open(['route' => ['product.destroy', $product->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>

                                <td>{{ $product->product_code }}</td>

                                @foreach ($provider as  $value)
                                    @if($value->id == $product->providers_id)                                        
                                    <td>{{ $value->supplier_name}}
                                    @endif
                                @endforeach

                                  @foreach ($category as  $valueC)
                                    @if($valueC->id == $product->categories_id)                                        
                                    <td>{{ $valueC->category_name}}
                                    @endif
                                @endforeach                               

                                <td>{{ $product->categories_id }}</td> 
                                <td>{{ $product->product_name}}</td> 
                                <td>{{ $product->quatity }}</td>
                                <td>{{ $product->purchase_price }}</td>
                                <td>{{ $product->sale_price }}</td>
                                <td>{{ $product->discout }}</td>                               
                                <td>{{ $product->reorder_level }}</td>      
                                 <td>{{ $product->picture }}</td>                         
                              
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
            
           
             <div align="center">
                <a class="btn btn-primary" href="{{ route('admin') }}"><i class="fa fa-chevron-circle-left"></i>Regresar</a>      
        </div>
            
        </div>
    </div>
@endsection


