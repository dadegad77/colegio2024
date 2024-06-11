@extends('layouts.app')
@section('titulo', 'Editar Docente')
@section('cabecera', 'EDICION DOCENTES')
 
@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para ingresar un docente --}}
                <form action="{{route('docentes.update', $docente->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del docente" value="{{ $docente->nombre }}" class="input input-bordered" required />
                    </div>
                    {{-- apellido --}}
                    <div class="form-control">
                        <label class="label" for="apellido">
                            <span class="label-text">apellido</span>
                        </label>
                        <input type="text" name="apellido" placeholder="Apellido del docente" value="{{ $docente->apellido }}" class="input input-bordered" required />
                    </div>
                    {{-- titulo --}}
                    <div class="form-control">
                        <label class="label" for="titulo_obtenido">
                            <span class="label-text">titulo obtenido</span>
                        </label>
                        <input type="text" name="titulo_obtenido" placeholder="Escriba el titulo" value="{{ $docente->titulo_obtenido }}" class="input input-bordered" required/>
                    </div>
                    
                 
                    {{-- boton de enviar --}}
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                        <a href="{{ route('docentes.index') }}" class="btn btn-outline btn-primary mt-4">CANCELAR</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
