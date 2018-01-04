    @extends('layouts.admin')

@section('content')
<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				Usuarios <small>[Editar producto]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                 
                    
                    {!! Form::model($users, array('route' => array('admin.user.update', $users->id))) !!}
                    
                        <input type="hidden" name="_method" value="PUT">
                    
                      
        
                        <div class="form-group">
                            <label for="first_name">Nombre:</label>
                            
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                     
                        
                        <div class="form-group">
                            <label for="last_name">Apellidos:</label>
                            
                            {!! 
                                Form::textarea(
                                    'last_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Nombre de Usuario:</label>
                            
                            {!! 
                                Form::number(
                                    'username', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de Usuario...',
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="type">Tipo:</label>
                            
                            {!! Form::radio('type', 'user', $user->type=='user' ? true : false) !!} User
                            {!! Form::radio('type', 'admin', $user->type=='admin' ? true : false) !!} Admin
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
                            <a href="" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>
    

@endsection