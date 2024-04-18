@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar departamento</h1>

<div class="row">
<div class="col">

<form action="/departamento/{{$departamentoEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre departamento</label>
  <input type="text" class="form-control" id="nombre" value="{{$departamentoEliminar->nombre}}" name="nombre">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/departamento" class="btn btn-warning">Cancelar</a>

</div>

@endsection
