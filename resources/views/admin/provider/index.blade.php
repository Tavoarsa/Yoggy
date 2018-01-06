@extends('layouts.admin')

@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>            
                <i class="fa fa-user" aria-hidden="true"></i>Proveedor
                  <a href="{{ route('provider.create') }}" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Proveedor
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
                            <th>Empresa</th>
                            <th>Nombre Proveedor</th>
                             <th>Telefono</th>
                            <th>Email</th>
                            <th>Puesto</th>
                            <th>Direccion</th>
                            <th>Codigo Postal</th>
                            <th>Cuidad</th>                           
                            <th>Status</th>
                            <th>Metodo de pago</th>
                            <th>Notas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($providers as $provider)
                            <tr>
                                <td>
                                    <a href="{{ route('provider.edit', $provider) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                 <td>
                                    {!! Form::open(['route' => ['provider.destroy', $provider->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>                              
                                <td>{{ $provider->supplier_name }}</td>
                                <td>{{ $provider->contact_name }}</td>                              
                                <td>{{ $provider->phone }}</td> 
                                <td>{{ $provider->email}}</td> 
                                <td>{{ $provider->supplier_position }}</td>
                                <td>{{ $provider->address }}</td>
                                <td>{{ $provider->postal_code }}</td>
                                <td>{{ $provider->city }}</td>
                                <td>{{ $provider->status==0 ? "Activo" : "Inactivo" }}</td>                                                             
                                <td>{{ $provider->way_pay =0 ? "Credito" : "Contado"}}</td>
                                <td>{{ $provider->notes }}</td>                            
                              
                               
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


