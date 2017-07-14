@extends('layouts.app')
@section('title','productos')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de productos</div>
                @if(session('status'))
                <div>
                    {{session ('status')}}
                </div>
                @endif
                <div class="panel-body">
                    <div class="prloop">
                    @foreach ($productos as $producto)
                    <p>Producto: {{ $producto->nombre }} {{ $producto->precio }} <img src="{{ $producto->rutaimg }}" width="75"> {{ $producto->stock }}
                        <a href="/actualizaproducto/$producto->id" class='btn btn-info'> Editar </a>
                        <a href class='btn btn-danger'> Borrar </a>
                    </p>
                  
                    @endforeach
                    {{ $productos->links() }}
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
