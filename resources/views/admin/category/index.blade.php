@extends('layouts.admin')
@section('content')
<div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                CATEGORÍAS <a href="{{ route('category.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Categoría</a>
            </h1>
        </div>
        <div class="page">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('category.edit', $category) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['category.destroy', $category]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->descrition }}</td>
                                 <td>{{ $category->tag }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             <div align="center">
         <a class="btn btn-primary" href="{{url('category_index')}}"><i class="fa fa-chevron-circle-left"></i>REGRESAR</a>      
        </div>
        </div>


    </div>
@stop