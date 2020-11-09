@extends('loyout.app')

@section('content')
    <h1>Contacto</h1>
    <a href="{{ route('Landing.acercade')}}" class="btn btn.info">Acerca de</a> |
    <a href="{{ route('Landing.domicilios')}}" class="btn btn.info">Domicilios</a> |
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a>
    <div>
        <br>
        <h2> Información De Contacto</h2>

        Avda. del Euro 1<br>
        47009 Valladolid<br>
        Puestos F1-F2<br>
        Plataforma de distribución<br>
        Naves C2-C3<br>
        Tel. 983 38 00 51<br><br>

        Avenida de Cervera<br>
        Polígono Industrial Parcela 1<br>
        34400 Herrera de Pisuerga (Palencia)<br>
        Tel. 633 284 662

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2980.2957537961524!2d-4.724800784676029!3d41.67095567923914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1603916054897!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection


