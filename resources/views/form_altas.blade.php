@extends('layouts.index')

@section('content')
    <center>
     <h1 class="text-2xl text-center pt-1">Agregar nuevo  Insumo</h1>
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
<th></th>
        <th>Mas</th>


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
</center>
@endsection