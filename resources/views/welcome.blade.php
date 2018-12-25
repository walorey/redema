<!-- asi llamo a la plantilla -->
@extends('admin.template.main')

<!-- asi llamo a una seccion de la plantilla, en la plantilla se pone yield (no puedo poner el arroba por que sino me tira error-->
@section('title') 
    Reddema
@endsection

@section('content')
    <h1>Hola esto es River</h1>
    <a href="" class="btn btn-success">Ganar copa</a>
@endsection('content')

