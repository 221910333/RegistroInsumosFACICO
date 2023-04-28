@extends('layouts.index2')
@section('content')

<div class="container">
  
  <div class="container-fluid w-100 vh-100 row align-items-center m-0 bg-sm-login">
    <div class="row h-75">
      <div>
        <a class="btn btn-verde ms-1 text-blanco"  href="{{ route('registros') }}">Regresar</a>
      </div>
      
      <div class="col-sm-12 col-md-10 col-lg-8 align-items-center m-auto shadow-lg bg-light">
        
        <div class="card-body">
     <h1 class="card-header btn-amarillo text-blanco w-100 fw-bold p-2 mb-2 text-center">Agregar nuevo  Insumo</h1>
    <form action="/guardar" method="POST" enctype="multipart/form-data">
     @csrf
      <TABLE BORDER CELLPADDING=20 CELLSPACING=10>
      	<TR>
          <TD>
            <div class="form-group row">
             <label for="inputmodelo" class="col-sm-2 col-form-label">Nombre:</label>
            </div>
          </TD>
          <TD>
            <div class="col-sm-10">
             <input name="nombre" type="text" class="form-control" id="inputnombre" placeholder="nombre">
            </div>
          </TD>
          <td>
            <div class="col-sm-10">
              <button type="submit" class="font-bold py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Guardar</button>
            </div>
          </td>
      	</TR>
      </TABLE>
    </form>
    
    <h1 class="text-2x1 text-center pt-2">Lista de Insumos</h1>
  <hr>
    <table class="table">
     <thead cclass="table-light">
       <tr>
         <th scope="col">#</th>
         <th scope="col">Insumo</th>
         <th>Borrar</th>
        


       </tr>
     </thead>
     <tbody>

        @foreach ($insumos as $insumo)
        <tr>
        <th scope="row">{{ $insumo->id}}</th>
          <td >{{ $insumo->nombre }}</td>
            <td>
             
             <a href="{{ route('borrarinsumo', ['id'=>$insumo->id])}}"  class="font-bold
               py-1 px-3 rounded-md bg-red-200 hover:bg-red-400">Borrar</a>
             
         </td>
           </tr>
 
          @endforeach
        </tbody>
      </div>
    </div>
  </div>
</div>
@endsection