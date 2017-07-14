@extends('layouts.app')
@section('title','productos')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de productos</div>

                <div class="panel-body">
                <form action="/guardaproducto" method="post" class="form">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">precio</label>
                        <input type="text" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="nombre">ruta imagen</label>
                        <input type="text" name="rutaimg">
                    </div>
                    <div class="form-group">
                        <label for="nombre">stock</label>
                        <input type="text" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="nombre">descripcion</label>
                        <input type="text" name="descripcion">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="enviar" class="btn btn-success">insertar </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
