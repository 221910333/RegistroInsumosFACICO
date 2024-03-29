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
                        <div >

                        </div>
                        <p class="fw-bold text-amarillo">
                           Nombre: <span id="resultado" class="fw-bold text-verde">-------</span> 
                        </p>
                        <p class="fw-bold text-amarillo">
                           Numero de Cuenta <span id="resultadoNumero" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                           Aula <span id="resultadoAula" name="resultado" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                           Teléfono <span id="resultadoTelefono" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                            Unidad De Aprendizaje <span id="resultadoUA" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                            Profesor <span id="resultadoProfesor" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                            Licenciatura <span id="resultadoLicenciatura" class="fw-bold text-verde">-------</span>
                        </p>
                    </div>
                    <div>
                        <span class="badge badge-info w-100 bg-verde p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Datos del Insumo</h6>
                        </span>
                        <p class="fw-bold text-amarillo">
                            Insumo <span id="resultadoInsumos" class="fw-bold text-verde">-------</span>
                            
                        </p>
                        <p class="fw-bold text-amarillo">
                            Fecha Solicitud y Hora <span id="resultadoFS" class="fw-bold text-verde">-------</span>
                        </p>
                        <p class="fw-bold text-amarillo">
                            Fecha de Entrega y Hora <span id="resultadoFE" class="fw-bold text-verde">-------</span>
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
               <center><label for="" class="fw-bold text-verde ">Administrador</label></center> 
               <br>
                <div class="container h-100">
                    <span class="badge badge-info w-100 btn-amarillo p-2 mb-2">
                        <h6 class="text-white fw-bold m-0">Solicitud De Prestamo de Insumo Informático</h6>
                    </span>

                   
                    <form action="save" method="post" class="p-3 text-center mt-4">
                        @csrf
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-person-circle"></i> Nombre del Solicitante</label>
                                <input type="text" name="solicitante"  class="form-control text-center @error('solicitante') is-invalid @enderror" id="nombre" placeholder="Nombre del Solicitante" value="" onkeyup="mostrar(this.value)">
                                @error('solicitante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-123"></i> Numero de cuenta</label>
                                <input type="number" name="cuenta" class="form-control text-center @error('cuenta') is-invalid @enderror" id="razon" onkeypress="return soloLetras(event)" placeholder="Numero de Cuenta" value="" onkeyup="mostrarNumero(this.value)">
                                @error('cuenta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-bank"></i> Aula</label>
                                <select class="form-select" name="id_aula" id="aulas">
                                    @foreach($aulas as $aula)
                                    <option  value="{{$aula->id}}">{{$aula->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-telephone-fill"></i>Telefono</label>
                                <input type="text" name="telefono" class="form-control text-center @error('telefono') is-invalid @enderror" id="phone" placeholder="Número Telefonico" value="" onkeyup="mostrarTelefono(this.value)">
                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-archive"></i> Unidad de Aprendizaje</label>
                                <input type="text" name="unidad_aprendizaje" class="form-control text-center @error('unidad_aprendizaje') is-invalid @enderror" id="email" placeholder=" Unidad de Aprendizaje" value="" onkeyup="mostrarUA(this.value)">
                                @error('unidad_aprendizaje')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2 text-verde fw-bold"> <i class="bi bi-person-check-fill"></i> Profesor</label>
                                <input type="text" name="profesor" class="form-control text-center @error('unidad_aprendizaje') is-invalid @enderror" id="email" placeholder="Profesor" value="" onkeyup="mostrarProfesor(this.value)">
                                @error('profesor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                            <div class="row py-3">
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2 text-verde fw-bold"> <i class="bi bi-bookmark-star"></i> Licenciatura</label>
                                    <select class="form-select" name="id_licenciatura" id="licenciaturas">
                                        @foreach($licenciaturas as $licenciatura)
                                        <option value="{{$licenciatura->id}}">{{$licenciatura->nombre}}</option>
                                        @endforeach
                                    </select>
                                    <br><br>
                                    
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <label class="mb-2 text-verde fw-bold"> <i class="bi bi-box2"></i> Insumos</label>
                                    <br>
                                @foreach($insumos as $insum)
                                <ul class="list-group @error('insumo') is-invalid @enderror">
                                    <li class="list-group-item ">
                                      <input name="insumo[]" class="form-check-input me-1" type="checkbox" value="{{$insum->nombre}}" aria-label="...">
                                      {{$insum->nombre}}
                                    </li>
                                    
                                </ul>
                               
                                @endforeach 
                                @error('insumo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="form-group py-2">
                                    <label class="mb-2 text-verde fw-bold"> <i class="bi bi-calendar-event" ></i> Fecha de Solicitud</label><br>
                                    <input name="fecha_solicitud" value="datetime" class="@error('fecha_solicitud') is-invalid @enderror"  type="date" onkeyup="mostrarFS(this.value)">
                                    @error('fecha_solicitud')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                
                                <div class="form-group py-2">
                                    <label class="mb-2 text-verde fw-bold"> <i class="bi bi-calendar-event"></i> Fecha de Entrega</label><br>
                                    <input name="fecha_entrega" class="@error('fecha_solicitud') is-invalid @enderror" type="date" onkeyup="mostrarFE(this.value)">
                                    @error('fecha_solicitud')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <center>
                                <div class="mt-3">
                                    <input type="submit" value="Guardar Cambios" class="btn btn-sm ms-1 btn-amarillo  fw-bold text-blanco">
                                </div>
                            </center>
                        </div>
                        
                    </form>
                   
<br>
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
        <script src="js/TextForm.js"></script>
@endsection
