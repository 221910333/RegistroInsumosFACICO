@extends('layouts.index')

@section('content')
    <select class="form-select" name="id_numero" id="id_numero">
        <option value="0">-----Seleccione un Numero------</option>
        @foreach($numeros as $numero)
        <option value="{{$numero->id}}">{{$numero->nombre}}</option>
        @endforeach
        </select>
        <script src="js/TextForm.js"></script>
        
@endsection

