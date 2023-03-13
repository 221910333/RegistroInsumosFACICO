@extends('layouts.index')

@section('content')
<div class="container">
    <aside class="controls-clients">
        <div class="my-3">
            <button type="button" class="btn btn-verde" data-bs-toggle="modal" data-bs-target="#createClient">
                <i class="bi bi-person-plus-fill text-blanco"></i>
            </button>
            <span class="fw-bold overlay">Agregar Nuevo Registro</span>
        </div>
    </aside>
    <div class="row h-25 p-3">
        <div class="col">
            <h1 class="text-center mt-3 text-verde fw-bold">Directorio de Registros</h1>
            <br><br>
            <div class="row ps-5 pe-5 justify-content-center text-center text-white fw-bold">
                <div class="col-lg-1 mx-5 btn-amarillo text-blanco">
                    <p class="m-0 ">
                        <span class="d-block" >Registros</span>
                        Total
                    </p>
                </div>
                
                <div class="col-lg-1 mx-5">
                    <a href="#" class="btn btn-verde ms-1 text-blanco" target="_blank">Exportar <strong>Semestre A</strong></a>
                </div>
                <div class="col-lg-1 mx-5">
                    <a href="#" class="btn btn-verde ms-1 text-blanco" target="_blank">Exportar <strong>Semestre B</strong></a>
                </div>
            </div>
            <br>
        </div>
    </div>

    <div class="container-fluid pt-md-2 p-md-5 pb-md-0 p-sm-2">
        <div class="row justify-content-center mb-3">
           
                <div class="col-lg-4 col-xl-3 col-sm-5 col-md-6 m-2 shadow p-5 text-center provider bg-light rounded">
                    <div class="btn-delete-container">
                        <form action="#" method="post" title="Eliminar">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Seguro que deseas eliminar')">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </form>
                    </div>
                    <p class=" w-auto fs-6 fw-bold fst-italic rounded-pill">
                        nombre 
                    </p>
                    <p>
                        <i class="bi bi-telephone-fill"></i>
                        - telefono
                    </p>
                    <p>
                        <i class="bi bi-geo-alt-fill"></i>
                        - insumo
                    </p>

                    <button
                        data-bs-target="#editClient "
                        data-bs-toggle="modal"
                        class="btn btn-amarillo text-blanco btn-sm d-block w-100 btn-edit"
                        title="Editar">
                        <i class="bi bi-pencil-square"></i>
                        Editar
                    </button>
                    
                </div>

            
                <h3 class="text-center text-verde fw-bold">No hay registros en existencia</h3>
            
        </div>
    </div>

@endsection
