
@extends('layouts.template')


@section('titulo', 'Inicio')
    
@section('contenido')



<div class="container mt-4 col-md-6">
    <h1 class=" text-center text-dark fw-bold fs-3">Antonio Monegal, Premio Nacional de Ensayo 2023</h1>
<div class="card fs-6 text-center ">

    <img src="{{ asset('imagenes/img.jpg') }}">
    <div class="card-body">

<h6 class="fw-semibold" ><a href="https://elpais.com/cultura/2023-10-26/antonio-monegal-premio-nacional-de-ensayo-2023.html" target="_blank">EL PAÍS|Madrid|26 OCT 2023 - 06:03 CST</a></h6>

      <p class="card-text">
        El jurado destaca la “excelencia del estilo y la creatividad”
        de la obra ganadora, ‘Como el aire que respiramos: el sentido
        de la cultura’</p>
    </div>
  </div>
</div>

@endsection