@extends('layouts.admin')

@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>            
                <i class="fa fa-user" aria-hidden="true"></i>Usuario
                  <a href="{{ route('user.create') }}" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Usuario
                </a>              
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>                           
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Status</th>
                            <th>Roll</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>                              
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->status==0 ? "Activo" : "Inactivo" }}</td>
                                <td>{{ $user->roll == 0 ? "Admin" : "Cajero" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
            <?php echo $users->render(); ?>
             <div align="center">
         <a class="btn btn-primary" href="{{ route('admin') }}"><i class="fa fa-chevron-circle-left"></i>Regresar</a>      
        </div>
            
        </div>
    </div>
@endsection


