@extends('layouts.admin')

@section('content')
 <div class="container text-center">
     
        <div id="SubHeader" class="">
            <h1>
               <i class="fa fa-product-hunt" aria-hidden="true"></i> Proveedores <small>[ Agregar Proveedor ]</small>
            </h1>
        </div>

        <div class="row style_provider">
            <div class="col-md-offset-3 col-md-6 Container_Provider">
                
                <div class="page_provider"> 
                    {!! Form::open(['route'=>'provider.store']) !!}

                       <div class="form-group Nom_Provider">
                            <label for="supplier_name">Nombre de la empresa:</label>
                            
                            {!! 
                                Form::text(
                                    'supplier_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de la empresa...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}

                            
                        </div>

                        <div class="form-group Nom_Contacto">
                            <label for="contact_name">Nombre del Contacto:</label>
                            
                            {!! 
                                Form::text(
                                    'contact_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre del contacto...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group Puesto_Contacto">
                            <label for="supplier_position">Puesto del contacto:</label>
                            
                            {!! 
                                Form::text(
                                    'supplier_position', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Puesto del contacto',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                            <div class="form-group Email_Provider">
                            <label for="email">Email:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el email...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                           <div class="form-group Telefono_Provider">
                            <label for="phone">Telefono:</label>
                            
                            {!! 
                                Form::text(
                                    'phone', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el numero de telefono...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group Direccion_provider">
                            <label for="address">Dirección:</label>
                            
                            {!! 
                                Form::text(
                                    'address', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la dirección...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group Codigo_postal">
                            <label for="postal_code">Codigo Postal:</label>
                            
                            {!! 
                                Form::text(
                                    'postal_code', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el Codigo Postal...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                    

                        <div class="form-group Ciudad_Provider">
                            <label for="city">Cuidad:</label>
                            
                            {!! 
                                Form::text(
                                    'city', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de la Cuidad...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                     

                        <div class="form-group status_Provider">
                            <label for="status">Status:</label>
                            
                            {{ Form::select('status', ['Activo', 'Inactivo']) }} 

                        </div>

                        <div class="form-group Formas_pago">
                            <label for="way_pay">Forma de pago:</label>
                            
                             
                            {{ Form::select('way_pay', ['Credito', 'Contado']) }} 
                        </div>

                         <div class="form-group">
                            <label for="notes">Notas:</label>
                            
                            {!! 
                                Form::textarea(
                                    'notes', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese notas relevantes...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>  

                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                             <a href="{{ route('provider_index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    
                    
                </div>
                
            </div>
        </div>
        
</div>



@endsection