@extends('loyout.app')

@section('content')
    <h1>Domicilios</h1>
    <a href="{{ route('Landing.acercade')}}" class="btn btn.info">Acerca de</a> |
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a> |
    <a href="{{ route('Landing.contacto')}}" class="btn btn.info">Contacto</a>
    <div>
        <br>
        <h2> Información Domicilios</h2>

        Coste Domicilios a cualquier sitio de la ciudad: 10000<br>
        Horarios: 24/7<br>
    </div>
@endsection
