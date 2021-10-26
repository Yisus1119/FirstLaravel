@extends('Plantilla')



@section('Contenedor')
<form action="{{ route('titulo') }}" method="POST">
@csrf <!--Cross-Site Request Forgery, es un metodo para protegernos de los atacantes. -->
<div class="container w-25 border p-4 mt-4" style="background-color: #283747;">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Debe escribir el titulo de la tarea." name="Titulo">
  <label for="floatingInput">T&iacute;tulo de la tarea</label>
</div>
<button type="submit" class="btn btn-primary">Crear nueva tarea</button>
</form>
</div>
@endsection
