@extends('adminlte::page')

@section('title', 'ETCML')

@section('content_header')
   <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">Nueva categoría</a>
   <h2>Lista de categorías</h2>
@stop

@section('content')
        

        @if (session('info'))
            <div class="alert alert-success">
            {{session('info')}}
            </div>
        @endif


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                
                <t-body>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                {{$category->name}}
                            </td>
                            <td width="10px">
                               <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>     
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </t-body>

            </table>
        </div>
    </div>
@stop

