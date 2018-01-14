@extends('layouts.admin')

@section('content')


<div class="container text-center"> 

    <div class="page-header">
            <h1>
               <i class="fa fa-product-hunt" aria-hidden="true"></i>Categoría<small>[ Agregar Categoría ]</small>
            </h1>
     @include('partials.errors')
    </div>     
       
     <div class="row">
            
            <div class="column">     
                
                   
                      {!! Form::open(['route'=>'category.store','class' => 'form-horizontal']) !!}

                       <div class="form-group">
                            <label for="category_name">Nombre de la categoria:</label>
                            
                            {!! 
                                Form::text(
                                    'category_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de la categoria...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}

                        </div>
                        
                        <div class="form-group">
                            <label for="descrition">Descrición:</label>
                            
                            {!! 
                                Form::text(
                                    'descrition', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la descripcion...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                   
                </div>
                <div class="column">


                        <div class="form-group">
                            <label for="tag">Tag:</label>
                            
                            {!! 
                                Form::text(
                                    'tag', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Tags',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                         <div class="form-group">
                            <label for="picture">Imagen:</label>
                            
                            {!! 
                                Form::text(
                                    'picture', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Imagen...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                </div>                       

                      <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                             <a href="{{ route('category_index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                
                           
     </div>
</div>
    
@endsection
