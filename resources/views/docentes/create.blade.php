@extends('layouts.app')
@section('titulo', 'Ingresar Docente')
@section('cabecera', 'INGRESO DOCENTES')
 
@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear un producto --}}
                <form action="{{route('docentes.store')}}" method="POST">
                    @csrf
                    {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del docente"  class="input input-bordered" required />
                    </div>
                    {{-- apellido --}}
                    <div class="form-control">
                        <label class="label" for="apellido">
                            <span class="label-text">apellido</span>
                        </label>
                        <input type="text" name="apellido" placeholder="Apellido del docente" class="input input-bordered" required />
                    </div>
                    {{-- titulo --}}
                    <div class="form-control">
                        <label class="label" for="titulo_obtenido">
                            <span class="label-text">titulo obtenido</span>
                        </label>
                        <input type="text" name="titulo_obtenido" placeholder="Escriba el titulo" class="input input-bordered" required/>
                    </div>
                    
                 
                    {{-- boton de enviar --}}
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                        <a href="{{ route('docentes.index') }}" class="btn btn-outline btn-primary mt-4">CANCELAR</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
