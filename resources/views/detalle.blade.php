@extends('layouts.index')

@section('content')
<div class="row justify-content-center mw-100">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-dark">Home</a>
                    @else
                        
                    @endauth
                </div>
            @endif
            <br>
            <br>
            <br>
            <br>
            <br>
          

        <div class="col-sm-12 col-md-6 col-lg-6 rounded-top rounded-bottom shadow-lg">
            <div class="card mb-3 border-0 h-100">
                <div class="card-image text-center">
                    <img src="{{ asset('img/assets/corporate_default.png') }}" alt="corporate" class="img-fluid w-25">
                </div>
                <div class="container h-100">
                    <span class="badge badge-info w-100 btn-amarillo p-2 mb-2">
                        <h6 class="text-white fw-bold m-0">Detalle del prestamo</h6>
                    </span>
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-person-circle"></i> Nombre del Solicitante</label>
                                <input type="text" name="nom_solicitante" class="form-control text-center" id="nombre" placeholder="Nombre del Solicitante" value="" onkeyup="mostrar(this.value)">
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-123"></i> Numero de cuenta</label>
                                <input type="number" name="no_cuenta" class="form-control text-center" id="razon" onkeypress="return soloLetras(event)" placeholder="Numero de Cuenta" value="" onkeyup="mostrarNumero(this.value)">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-bank"></i> Aula</label>
                                <select class="form-select" name="id_aula" id="aulas">
                                    @foreach($aulas as $aula)
                                    <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-telephone-fill"></i>Telefono</label>
                                <input type="text" name="telefono" class="form-control text-center" id="phone" placeholder="Número Telefonico" value="" onkeyup="mostrarTelefono(this.value)">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-archive"></i> Unidad de Aprendizaje</label>
                                <input type="text" name="unidad_aprendizaje" class="form-control text-center" id="email" placeholder=" Unidad de Aprendizaje" value="" onkeyup="mostrarUA(this.value)">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-person-check-fill"></i> Profesor</label>
                                <input type="text" name="profesor" class="form-control text-center" id="email" placeholder="Profesor" value="" onkeyup="mostrarProfesor(this.value)">
                            </div>
                        </div>
                            <div class="row py-3">
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2"> <i class="bi bi-bookmark-star"></i> Licenciatura</label>
                                    <select class="form-select" name="id_licenciatura" id="licenciaturas">
                                        @foreach($licenciaturas as $licenciatura)
                                        <option value="{{$licenciatura->id}}">{{$licenciatura->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2"> <i class="bi bi-box2"></i> Insumos</label>
                                    <div>
                                        <select class="form-select" name="id_insumo" id="insumos">
                                            <option  value="0">-----------------</option>
                                            @foreach($insumos as $insumo)
                                            <option value="{{$insumo->id}}">{{$insumo->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for=""> <i class="bi bi-list-ol"></i> Seleccione el numero</label>
                                        <div id="numero">
                                            <select class="form-select" name="id_numero" id="id_numero">
                                                <Option value="0">-----------</Option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <label class="mb-2"> <i class="bi bi-calendar-event" ></i> Fecha de Solicitud</label>
                                <input name="fecha_solicitud" value="datetime" min="2023-02-01" max="2024-07-01" type="date" onkeyup="mostrarFS(this.value)">
                            </div>
                            <div>
                                <label for=""><i class="bi bi-alarm"></i> Hora</label>
                                <select name="id_hora" id="">
                                    @foreach($horas as $hora)
                                    <Option value="{{$hora->id}}">{{$hora->nombre}}</Option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label class="mb-2"> <i class="bi bi-calendar-event"></i> Fecha de Entrega</label>
                                <input name="fecha_entrega" type="date" onkeyup="mostrarFE(this.value)">
                            </div>
                            <div>
                                <label for=""><i class="bi bi-alarm"></i> Hora</label>
                                <select name="id_hora" id="">
                                    @foreach($horas as $hora)
                                    <Option value="{{$hora->id}}">{{$hora->nombre}}</Option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        

                        <a href="{{ route('home')}}"><button
                            data-bs-target="#editClient "
                            data-bs-toggle="modal"
                            class="btn btn-amarillo text-blanco btn-sm d-block w-100 btn-edit"
                            title="Detalle">
                            Home
                        </button></a>

                </div>
            </div>
        </div>
        <script src="js/TextForm.js"></script>
@endsection
