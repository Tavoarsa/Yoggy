@extends('layouts.admin')

@section('content')

<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-pencil" aria-hidden="true"></i>
				Usuarios <small>[Editar Usuario]</small>
                
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page"> 
                @include('partials.errors')
                 
                    
                    {!! Form::model($user, array('route' => array('user.update', $user))) !!}
                    
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="username">Nombre de Usuario:</label>
                            
                            {!! 
                                Form::text(
                                    'username', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de Usuario...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>                   
                      
        
                        <div class="form-group">
                            <label for="first_name">Nombre:</label>
                            
                            {!! 
                                Form::text(
                                    'first_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...'
                                        
                                    )
                                ) 
                            !!}
                        </div>               
                        
                        <div class="form-group">
                            <label for="last_name">Apellidos:</label>
                            
                            {!! 
                                Form::text(
                                    'last_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                         'placeholder' => 'Ingresa los apellidos...'
                                        
                                    )
                                ) 
                            !!}
                        </div>   

                         <div class="form-group">
                            <label for="email">Correo:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el correo...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>     

                        <div class="form-group">
                            <label for="phone">Telefono:</label>
                            
                            {!! 
                                Form::text(
                                    'phone', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el telefono...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div> 

                        <div class="form-group">
                            <label for="status">Status:</label>
                            
                            {!! Form::radio('status', '0', $user->status=='0' ? true : false) !!} Activo
                            {!! Form::radio('status', '1', $user->status=='1' ? true : false) !!} Inactivo
                        </div>

                         <div class="form-group">
                            <label for="address">Dirección:</label>
                            
                            {!! 
                                Form::text(
                                    'address', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la dirección...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div> 

                       <div class="form-group">
                            <label for="roll">Roll:</label>
                            
                            {!! Form::radio('roll', '0', $user->roll=='0' ? true : false) !!} Admin
                            {!! Form::radio('roll', '1', $user->roll=='1' ? true : false) !!} Cajero
                        </div>
                    

                         <fieldset>
                            <legend>Cambiar password:</legend>
                            <div class="form-group">
                                <label for="password">Nuevo Password:</label>
                                
                                {!! 
                                    Form::password(
                                        'password', 
                                        array(
                                            'class'=>'form-control',
                                            //'required' => 'required'
                                        )
                                    ) 
                                !!}
                            </div>
                            
                            <div class="form-group">
                                <label for="confirm_password">Confirmar Nuevo Password:</label>
                                
                                {!! 
                                    Form::password(
                                        'password_confirmation',
                                        array(
                                            'class'=>'form-control',
                                            //'required' => 'required'
                                        )
                                    ) 
                                !!}
                            </div>
                        </fieldset><hr>
                           
                        
                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('user_index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>

        </div>       

	</div>
    

@endsection