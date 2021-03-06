@extends('layouts.master')

@section('head-title')
    BDE Saint-Nazaire - Administration
@endsection

@section('head-meta-description')
    Administration des activités et autres !
@endsection

@push('head-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="route-name" content="/api/events/images/all">
@endpush

@push('stylesheet')
    <link href="{{ asset('css/project-css/events.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project-css/lightbox/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project-css/adminPanel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.css"/>
@endpush

<!-- Manage images posted by users on past events -->

@section('content')


    <a href="{{ route('admin-panel') }}" class="btn btn-light back">Retour au panel administration</a>

    <hr>
    <h1>Images postées sur les évènements passés</h1>
    <hr>

    <select name="eventChoice" id="eventChoice" class="form-control">
        <option value="">Choisir un évènement</option>
        @foreach($events as $event)
            <option value="event{{$event->id}}">{{$event->name}} / {{ $event->imagesPostedByUsers->where('is_validated', '=', '1')->count() }} image(s) </option>
        @endforeach
    </select>

    <hr>

    <table id="eventImages" class="d-none" >
        <thead>
        <tr>
            <th>Image</th>
            <th>Nom de l'évènement</th>
            <th>Id de l'image</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Image</th>
            <th>Nom de l'évènement</th>
            <th>Id de l'image</th>
        </tr>
        </tfoot>
    </table>


@endsection

@push('script')
    <script src="{{ asset('js/project-js/images/preview-image.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js"></script>
    <script src="{{ asset('js/project-js/admin/adminTable.js') }}"></script>
    <script src="{{ asset('js/project-js/admin/loadImagesData.js') }}"></script>
@endpush
