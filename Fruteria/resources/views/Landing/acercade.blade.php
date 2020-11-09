@extends('loyout.app')

@section('content')
    <h1>Acerca de</h1>
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a> |
    <a href="{{ route('Landing.domicilios')}}" class="btn btn.info">Domicilios</a> |
    <a href="{{ route('Landing.contacto')}}" class="btn btn.info">Contacto</a>
    <div>
        <br>
        <h2> Misión </h2><br>
        <p> Nuestra misión es satisfacer las necesidades de todos nuestros clientes y  partner así como también de nuestros  trabajadores,<br>
            con el objetivo de maximizar la eficiencia y optimizar la rentabilidad a través de nuestra  diferenciación en calidad de producto, servicio y precio </p>
    </div>
    <div>
        <br>
        <h2> Visión </h2><br>
        <p> Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización de productos de calidad,<br>
            a partir de la cual afianzar un crecimiento progresivo y sostenido en el mercado nacional y europeo consolidando nuestra<br>
            posición como empresa de referencia en el sector con una imagen corporativa propia y diferenciada de sus competidores.<br>
            Frutas Terrados trabaja para conseguir la máxima calidad, un catálogo de productos diversificado y el mejor servicio al precio más competitivo. </p>
    </div>
    <div>
        <br>
        <h2> Datos Administradores </h2>

        Avda. del Euro 1<br>
        47009 Valladolid<br>
        Plataforma de distribución<br>
        info@terrados.es<br>
    </div>
@endsection
