@extends('layouts.master')

@section('head-title')
    BDE Saint-Nazaire - Mentions légales
@endsection

@push('stylesheet')
    <link href="{{ asset('css/project-css/politic.css') }}" rel="stylesheet">
    @endpush

@section('content')
    <main>
        <div id="boxPolitique">
            <div class="elementPolitique">
                <h3>Mentions légales</h3>
                <h4>Respect de la vie privée et collecte des Données Personnelles</h4>
                <p>Soucieux de protéger la vie privée de ses clients, CESI s’engage dans la protection des données personnelles. Une politique sur la protection des données personnelles rappelle nos principes et nos actions visant au respect de la réglementation applicable en matière de protection des données à caractère personnel.</p>
                <p><a href="#">Pour lire l’intégralité de notre politique sur la Protection des données personnelles cliquez-ici</a></p>
                <h4>Sécurité</h4>
                <p>Le CESI s’engage à mettre en œuvre tous les moyens nécessaires au bon fonctionnement du site. Cependant, le CESI ne peut pas garantir la continuité absolue de l’accès aux services proposés par le site. Les adhérents sont informés que les informations et services proposés sur le site pourront être interrompus en cas de force majeure et pourront le cas échéant contenir des erreurs techniques.</p>
                <h4>Cookies</h4>
                <p>Des cookies sont utilisés sur nos sites.</p>
                <p><a href="#">Pour plus d’informations, vous pouvez vous référer à la Politique sur le Protection des Données Personnelles en cliquant-ici</a></p>
            </div>
        </div>
    </main>
@endsection
