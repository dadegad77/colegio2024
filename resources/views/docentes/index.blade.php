@extends('layouts.app')
@section('titulo','docentes')   
@section('contenido')

<h1 class="text-3xl text-green-500 font-bold underline text-center ">PORTAL DOCENTE</h1>

<div class="card-actions justify-end">
<a href="docentes/create" class=" d-sm-inline-flex-w-16 d-md-inline-flex-w-32 d-lg-inline-flex-w-48 mx-4 items-center justify-center px-12 py-4 text-base font-medium text-center text-black bg-green-200 rounded-lg hover:bg-gray-600 focus:ring-4 focus:ring-gray-300"> INGRESAR DOCENTE </a></div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
     @foreach ($docentes as $docente)
        <div class="card w-60 bg-base-200 shadow-xl">
          <figure><img src="https://loremflickr.com/200/200/store&{{ $docente->nombre}}" alt="{{ $docente->nombre}}"/></figure>
          <div class="card-body">
             <h2 class="card-title">
                {{ $docente->nombre }}
                 
             </h2>
             <p> {{ $docente->apellido }} </p>
            <div class="card-actions justify-end">
             <a href="{{ route('docentes.edit' , $docente->id)}}" class="btn btn-xs bg-teal-600 btn-secondary">EDITAR</a>
             <form action="{{ route('docentes.destroy' , $docente->id)}}" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-xs bg-teal-600 btn-error">ELIMINAR</button>
             </form>
            </div>
          </div>
        </div>       
     @endforeach
</div>     
@endsection

