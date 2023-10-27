

@extends('layouts.template')

@section('titulo', 'Registro')

@section('contenido')  {{-- inicio del contenido  --}}


<div class="container mt-4 col-md-6 overflow-auto"> {{-- contenedor principal --}}

<h1 class="text-center text-success fw-bold">Formulario de libros</h1>
 
{{-- SweetAlers de exito!! --}}
@if(session()->has('confirmacion')) 

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('confirmacion')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

{{-- swetAlerts de error --}}
@if($errors->any())

@foreach ($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $error }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif


<div class="card" style="height: 400px; overflow-y: scroll;">
  <div class="card-header  text-center text-dark fw-bold fs-4">
    Registra tu libro
  </div>  
  <div class="card-body fw-semibold text-primary">
    <form method="POST" action="/guardarLibro"> {{-- Inicio del formulario --}}
      @csrf
      <div class="mb-2">
        <label  class="form-label">ISBN</label>
        <input name="txtISBN" type="text" class="form-control" value="{{old('txtISBN')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtISBN')}}</strong></p>
      </div>
      
      <div class="mb-2">
        <label class="form-label">Titulo</label>
        <input name="txtTitulo" type="text" class="form-control" value="{{old('txtTitulo')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtTitulo')}}</strong></p>
      </div>

      <div class="mb-2">
        <label class="form-label">Autor</label>
        <input name="txtAutor" type="text" class="form-control" value="{{old('txtAutor')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtAutor')}}</strong></p>
      </div>
      <div class="mb-2">
        <label class="form-label">Paginas</label>
        <input name="txtPaginas" type="number" class="form-control" value="{{old('txtPaginas')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtPaginas')}}</strong></p>
      </div>
      <div class="mb-2">
        <label class="form-label">Editorial</label>
        <input name="txtEditorial" type="text" class="form-control" value="{{old('txtEditorial')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtEditorial')}}</strong></p>
      </div>
      <div class="mb-2">
        <label class="form-label"> Email de Editorial</label>
        <input name="txtEmail" type="email" class="form-control" value="{{old('txtEmail')}}">
        <p class="fw-semibold text-danger"><strong>{{$errors->first('txtEmail')}}</strong></p>
      </div>

  </div>
  
  <div class="card-footer text-body-secondary text-center ">
    <div class="d-grid gap-2">
    <button type="submit" class="btn btn-outline-success">Guardar Libro</button>
  </div>
    </form>
  </div>
</div>
</div>

@endsection



