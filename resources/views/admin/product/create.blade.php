@extends('layouts.admin')

@section('content')
 <div class="container ">
        
        <div class="page-header">
            <h1>
               <i class="fa fa-product-hunt" aria-hidden="true"></i> Producto<small>[ Agregar Producto ]</small>
            </h1>
        </div>
        
        <div class="row">
            <div >
                
                <div class="page"> 
                 @include('partials.errors')

                      {!! Form::open(['route'=>'product.store','class' => 'form-inline']) !!}

                       <div class="form-group column">
                            <label for="product_code">Codigo:</label>
                            
                            {!! 
                                Form::text(
                                    'product_code', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el codigo..',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}

                            
                        </div>
                        
                        <div class="form-group column">
                            <label for="providers_id">Proveedor:</label>
                                                        
                             {!!Form::select('providers_id',$provider,["class" => "form-control"])!!}
                              <a href="#"><i class="fa fa-info"   aria-hidden="true"></i>Detalle</a>
                        </div>

                         <div class="form-group column " >
                            <label for="categories_id">Categoria:</label>
                                                        
                             {!!Form::select('categories_id',$category,["class" => "form-control btn_style"])!!}
                              <a href="#"><i class="fa fa-info"   aria-hidden="true"></i>Detalle</a>
                        </div>                  

                     
                            <div class="form-group column">
                            <label for="product_name">Nombre del Producto:</label>
                            
                            {!! 
                                Form::text(
                                    'product_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre del Producto...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                           <div class="form-group column">
                            <label for="quatity">Cantidad:</label>
                            
                            {!! 
                                Form::text(
                                    'quatity', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa cantidad..',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group column">
                            <label for="purchase_price">Precio de compra:</label>
                            
                            {!! 
                                Form::text(
                                    'purchase_price', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el Precio de compra...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group column">
                            <label for="sale_price">Precio de Venta:</label>
                            
                            {!! 
                                Form::text(
                                    'sale_price', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el Precio de Venta...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                          <div class="form-group column">
                            <label for="discout">Descuento:</label>
                            
                            {!! 
                                Form::number(
                                    'discout', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el descuento del producto..',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}<a>%</a>
                        </div>                    

                         <div class="form-group column">
                            <label for="reorder_level">Nivel de reeorden</label>
                            
                            {!! 
                                Form::number(
                                    'reorder_level', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese el nivel de reorden...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div> 

                         <div class="form-group column">
                            <label for="picture">Imagen</label>
                            
                            {!! 
                                Form::text(
                                    'picture', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese una imagen',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>   

                        <div class="form-group column">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                             <a href="{{ route('product_index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                        {!! Form::close() !!}                   
                    
                </div>                
            </div>
        </div>        
</div>
@endsection