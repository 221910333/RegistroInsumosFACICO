@extends('layouts.index')

@section('content')
<div class="row justify-content-center mw-100">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-dark">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-3 rounded-top rounded-bottom shadow-lg mb-3">
            <div class="card mb-3 border-0">
                <div class="card-image text-center my-3">
                    <img src="{{ asset('img/assets/user_default.png') }}" alt="user" class="img-fluid w-25">
                </div>

                <div class="text-center" overflow-x: auto>
                    <div>
                        <span class="badge badge-info w-100 bg-dark p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Información Personal</h6>
                        </span>
                        <p>
                            <span class="fw-bold text-danger">Nombre -</span>
                            
                        </p>
                        <p>
                            <span class="fw-bold text-danger">Correo -</span>
                            
                        </p>
                    </div>
                    <div>
                        <span class="badge badge-info w-100 bg-dark p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Datos del usuario</h6>
                        </span>
                        <p>
                            <span class="fw-bold text-danger">Usuario -</span>
                            
                        </p>
                        <p>
                            <span class="fw-bold text-danger">Puesto -</span>
                           
                        </p>
                    </div>
                    <div>
                        <span class="badge badge-info w-100 bg-dark p-2 mb-2">
                            <h6 class="text-white fw-bold m-0">Actualizar Contraseña</h6>
                        </span>
                        <form action="#" class="p-3" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group my-2">
                                <label>Contraseña Actual</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group my-2">
                                <label>Nueva Contraseña</label>
                                <input type="password" class="form-control" name="newpassword" id="newpassword">
                            </div>
                            <div class="form-group my-2">
                                <label>Repetir Nueva Contraseña</label>
                                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                                <div class="text-danger d-none" id="passwordmessage">
                                    Las contraseñas no coinciden
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <button class="btn btn-dark btn-sm w-100">Cambiar Contraseña</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 rounded-top rounded-bottom shadow-lg">
            <div class="card mb-3 border-0 h-100">
                <div class="card-image text-center">
                    <img src="{{ asset('img/assets/corporate_default.png') }}" alt="corporate" class="img-fluid w-25">
                </div>
                <div class="container h-100">
                    <span class="badge badge-info w-100 bg-dark p-2 mb-2">
                        <h6 class="text-white fw-bold m-0">Informacion de la empresa</h6>
                    </span>

                   
                    <form action="#" method="post" class="p-3 text-center mt-4">
                        @csrf
                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-briefcase-fill"></i> Nombre</label>
                                <input type="text" name="name" class="form-control text-center" id="nombre" placeholder="Nombre" value="">
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-building"></i> Razon Social</label>
                                <input type="text" name="business_name" class="form-control text-center" id="razon" onkeypress="return soloLetras(event)" placeholder="Razon Social" value="">
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="mb-2"> <i class="bi bi-geo-alt-fill"></i> Direccion</label>
                            <input name="address" type="text" id="address" class="form-control text-center" id="direccion" laceholder="Direccion de empresa" value="">
                        </div>

                        <div class="row py-2">
                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-phone"></i>Telefono</label>
                                <input type="text" name="phone" class="form-control text-center" id="phone" placeholder="Número telefonico" value="">
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <label class="mb-2"> <i class="bi bi-envelope-fill"></i> Correo</label>
                                <input type="text" name="email" class="form-control text-center" id="email" placeholder="Correo electronico" value="">
                            </div>
                        </div>
                        <hr>
                        
                        <div class="mt-3">
                            <input type="submit" value="Guardar Cambios" class="btn btn-sm d-block w-100 btn-dark">
                        </div>
                        
                    </form>
                   

                </div>
            </div>
        </div>
@endsection
