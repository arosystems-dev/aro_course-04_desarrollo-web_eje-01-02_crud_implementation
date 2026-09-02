@extends('principal.VPrincipal')
@section('contenido')
<div>
    <h1>REGISTRO DE ARTICULO</h1>
    <hr>
    <form method="POST" action="/articulo/update/{{$articulo->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card p-3">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$articulo->nombre}}" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$articulo->descripcion}}</textarea>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$articulo->cantidad}}" placeholder="" required>
            </div>
            <hr>
            <div>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" class="btn btn-warning"><a class="opcion" href="/articulo/index">Cancelar</a></button>
            </div>
        </div>
    </form>
</div>
@endsection