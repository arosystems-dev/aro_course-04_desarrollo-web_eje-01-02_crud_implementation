@extends('principal.VPrincipal')
@section('contenido')
<div>
    <h2>GESTIÓN DE ARTÍCULOS</h2>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6">
            <div class="sectorBuscar gap-1">
                <form method="POST" action="/articulo/search" style="display: flex;">
                    {{csrf_field()}}
                    <input name="criterio" class="form-control form-control-lg" type="text" placeholder="..." aria-label=".form-control-lg example">
                    <button type="submit" class="btn btn-info" style="margin: 0px 3px; width:200px">&#128269; Buscar</button>
                    <button type="button" class="btn btn-success" style="width: 200px;"><a class="opcion" href="/articulo/create">&#10010; Nuevo</a></button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <!-- CONTENIDO -->
    <table class="table">
        <thead>
            <tr>
                <th class="headerTable" scope="col">ID</th>
                <th class="headerTable" scope="col">PRODUCTO</th>
                <th class="headerTable" scope="col">CANTIDAD</th>
                <th class="headerTable" scope="col">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $articulo)
            <tr>
                <td>
                    {{$articulo->id}}
                </td>
                <td>
                    <b>NOMBRE: </b> {{$articulo->nombre}} <br>
                    <b>DESCRIPCIÓN: </b> {{$articulo->descripcion}}
                </td>
                <td>
                    {{$articulo->cantidad}}
                </td>
                <td>
                    <button type="button" class="btn btn-success"><a class="opcion" href="{{'/articulo/edit/'.$articulo->id}}">&#9998; Editar</a></button>
                    <button type="button" class="btn btn-danger"><a class="opcion" href="/articulo/destroy/{{$articulo->id}}">&#128465; Eliminar</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection