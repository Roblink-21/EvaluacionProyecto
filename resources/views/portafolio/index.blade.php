@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Gestión de Portafolios
                    <a href="{{route('create')}}" class="btn btn-primary btn-sm">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container d-flex flex-row flex-wrap justify-content-center ">
    @forelse ($portafolios as $portafolio)
    <div class="card" style="width: 18rem;">
        <img src="/storage/{{$portafolio->imagen }}" class="card-img-top" alt="..." width="180" height="180">
        <div class="card-body">
            <p class="card-title font-weight-bold">{{ $portafolio->nombre }}</p>
            <h5 class="card-title text-truncate">{{ $portafolio->descripcion }}</h5>
            <span class="badge bg-success ">Categoría: {{ $portafolio->categoria }}</span>
            <br>
            <br>
            <a href="{{route('show',$portafolio)}}" class="btn btn-secondary btn-lg btn-block">Más información</a>
        </div>
    </div>
    <hr>
    @empty
    <p>No Existen proyectos</p>
    @endforelse
    @endsection
    </div>
</div>