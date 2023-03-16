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
          
        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-3 rounded-top rounded-bottom shadow-lg mb-3">
            <div class="card mb-3 border-0">
                <div class="card-image text-center my-3">
                   <img src="{{ asset('img/assets/user_default.png') }}" alt="user" class="img-fluid w-25" > 
                </div>

                <div class="text-center" overflow-x: auto>
                    <div>
                        <span class="badge badge-info w-100 bg-verde p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Información Personal</h6>
                        </span>
                        <p>
                            <span class="fw-bold text-verde">Nombre - </span>
                            
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Numero de Cuenta -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Aula -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Teléfono -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Unidad De Aprendizaje -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Profesor -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Licenciatura -</span>
                        </p>
                    </div>
                    <div>
                        <span class="badge badge-info w-100 bg-verde p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Datos del Insumo</h6>
                        </span>
                        <p>
                            <span class="fw-bold text-verde">Insumo -</span>
                            
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Numero de Insumo -</span>
                           
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Fecha Solicitud y Hora -</span>
                        </p>
                        <p>
                            <span class="fw-bold text-verde">Fecha de Entrega y Hora -</span>
                        </p>
                    </div>
                </div>
                <div>
                    <span class="badge badge-info w-100 btn-danger p-2 mb-2">
                        <h6 class="text-white fw-bold m-0">
                            <strong>NOTA: </strong>
                        </h6><br>
                        <p>Si no entrega el insumo en el día y hora indicada, <br>
                            será acreedor a una multa de $20 pesos diarios</p>
                    </span>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 rounded-top rounded-bottom shadow-lg">
            <div class="card mb-3 border-0 h-100">
                <div class="card-image text-center">
                    <a href="{{ route('login') }}"> <img src="{{ asset('img/assets/corporate_default.png') }}" alt="corporate" class="img-fluid w-25"></a>
                </div>
                <div class="container h-100">
                    <span class="badge badge-info w-100 btn-amarillo p-2 mb-2">
                        <h6 class="text-white fw-bold m-0">Solicitud De Prestamo de Insumo Informático</h6>
                    </span>

                   
                    <form action="save" method="post" class="p-3 text-center mt-4">
                        @csrf
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-briefcase-fill"></i> Nombre del Solicitante</label>
                                <input type="text" name="nom_solicitante" class="form-control text-center" id="nombre" placeholder="Nombre" value="">
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-building"></i> Numero de cuenta</label>
                                <input type="number" name="no_cuenta" class="form-control text-center" id="razon" onkeypress="return soloLetras(event)" placeholder="Razon Social" value="">
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="mb-2"> <i class="bi bi-geo-alt-fill"></i> Aula</label>
                            <select name="id_aula" id="">
                                @foreach($aulas as $aula)
                                <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-phone"></i>Telefono</label>
                                <input type="text" name="telefono" class="form-control text-center" id="phone" placeholder="Número telefonico" value="">
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-envelope-fill"></i> unidad de Aprendizaje</label>
                                <input type="text" name="unidad_aprendizaje" class="form-control text-center" id="email" placeholder="Correo electronico" value="">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-envelope-fill"></i> Profesor</label>
                                <input type="text" name="profesor" class="form-control text-center" id="email" placeholder="Correo electronico" value="">
                            </div>
                            <div class="row py-2">
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2"> <i class="bi bi-briefcase-fill"></i> Licenciatura</label>
                                    <select name="id_licenciatura" id="">
                                        @foreach($licenciaturas as $licenciatura)
                                        <option value="{{$licenciatura->id}}">{{$licenciatura->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2"> <i class="bi bi-briefcase-fill"></i> Insumos</label>
                                    <div>
                                        <select class="form-select" name="id_insumo" id="insumos">
                                            <option  value="0">-----------------</option>
                                            @foreach($insumos as $insumo)
                                            <option value="{{$insumo->id}}">{{$insumo->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">Seleccione el numero</label>
                                        <div id="numero">
                                            <select class="form-select" name="id_numero" id="id_numero">
                                                <Option value="0">-----------</Option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <label class="mb-2"> <i class="bi bi-geo-alt-fill"></i> Fecha de Solicitud</label>
                                <input name="fecha_solicitud" type="date">
                            </div>
                            <div>
                                <label for="">Hora</label>
                                <select name="id_hora" id="">
                                    @foreach($horas as $hora)
                                    <Option value="{{$hora->id}}">{{$hora->nombre}}</Option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label class="mb-2"> <i class="bi bi-geo-alt-fill"></i> Fecha de Entrega</label>
                                <input name="fecha_entrega" type="date">
                            </div>
                            <div>
                                <label for="">Hora</label>
                                <select name="id_hora" id="">
                                    @foreach($horas as $hora)
                                    <Option value="{{$hora->id}}">{{$hora->nombre}}</Option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        
                        <div class="mt-3">
                            <input type="submit" value="Guardar Cambios" class="btn btn-sm d-block w-100 btn-amarillo">
                        </div>
                        
                    </form>
                   

                </div>
            </div>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#insumos").change(function(){
                var valinsumos = $("#insumos").val();
                if(valinsumos ==0){
                    $("#numero").empty();
                    $("#numero").html('<select name="id_numero" id="id_numero"><option value="0">-------</option></select>');

                }else{
                    $("#numero").empty();
                    $("#numero").load("{{ route('numeros2a')}}?id_insumo=" + valinsumos).serialize();
                }
            });
        });
        </script>
@endsection
