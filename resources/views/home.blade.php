@extends('layouts.index')

@section('content')
<div class="container">
    <aside class="controls-clients">
        <div class="my-3">
            <div>
                
                <a class="btn btn-verde ms-1 text-blanco" href="{{ route('registrar')}}"><i class="bi bi-person-plus-fill text-blanco"> Agregar Administrador</i></a>
            </div>
            <span class="fw-bold overlay">Agregar Nuevo Registro</span>
        </div>
    </aside>
    <div class="row h-25 p-3">
        <div class="col">
            <h1 class="text-center mt-3 text-verde fw-bold">Directorio de Registros</h1>
            <br><br>
            <div class="row ps-5 pe-5 justify-content-center text-center text-white fw-bold">
                
                <br><br><br><br>
                <div class="col-lg-1 mx-5 btn-amarillo text-blanco">
                    <p class="m-0 ">
                        <span class="d-block" >Agregar  Nuevo</span>
                       <a class="text-verde fw-bold" href="{{ route('form_altas')}}">Insumos</a>
                       <br>
                    </p>
                </div>
                
                <div class="col-lg-1 mx-5">
                    <a href="{{ route('exportarA') }}" class="btn btn-verde ms-1 text-blanco" target="_blank">Exportar <strong>Semestre A</strong></a>
                </div>
                <div class="col-lg-1 mx-5">
                    <a href="{{ route('exportarB') }}" class="btn btn-verde ms-1 text-blanco" target="_blank">Exportar <strong>Semestre B</strong></a>
                </div>
            </div>
            <br>
        </div>
    </div>
   
    </div>

@endsection
