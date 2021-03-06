@extends('layouts.master')

@section('head-title')
    BDE Saint-Nazaire - Administration
@endsection

@section('head-meta-description')
    Administration des activités et autres !
@endsection

@push('head-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="route-name" content="/events/images/comments">
    <meta name="imagePastEventId" content="{{ $imagePastEventId }}">
@endpush

@push('stylesheet')
    <link href="{{ asset('css/project-css/events.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project-css/lightbox/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project-css/adminPanel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.css"/>
@endpush

<!-- Manage comments posted on an image -->

@section('content')


    <a href="{{ URL::previous() }}" class="btn btn-light back">Retour au panel administration</a>

    <hr>
    <h1>Image postée sur l'évènement</h1>
    <hr>
    <img src="{{ asset('storage/imagesUploaded/'.$imageToCheckComments->path) }}" alt="Image avec les commentaires à vérifier !" id="imagePreview">

    <hr>


    <table id="imageComments" class="d-none" >
        <thead>
        <tr>
            <th>Contenu du commentaire</th>
            <th class="not-tablet">Nom de l'utilisateur</th>
            <th class="not-tablet not-mobile">Administration</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Contenu du commentaire</th>
            <th>Nom de l'utilisateur</th>
            <th>Administration</th>
        </tr>
        </tfoot>
    </table>

@endsection

@push('script')
    <script src="https://kit.fontawesome.com/1d7bafa102.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js"></script>

    <script src="{{ asset('js/project-js/admin/adminTable.js') }}"></script>
    <script src="{{ asset('js/project-js/admin/loadImageComments.js') }}"></script>
@endpush
