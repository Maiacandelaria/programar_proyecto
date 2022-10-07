@extends('adminlte::page')

@section('title', 'Programar Proyecto')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
          {{session('info')}}      
        </div>  
    @endif




    <div class="card">
        <div class="card-body">
            
            {{-- {!! Form::model($price, ['route' => ['admin.levels.update', $price], 'method'=>'put' ]) !!} --}}
         
            <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre del precio']) !!}
                    
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
               
                </div>
                <div class="form-group">
                    {!! Form::label('value', 'Valor') !!}
                    {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el precio del curso']) !!}
                    @error('value')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
    
                    {!! Form::submit('Actualizar precio', ['class' => 'btn btn-primary']) !!}
               
                </div>
                   
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop