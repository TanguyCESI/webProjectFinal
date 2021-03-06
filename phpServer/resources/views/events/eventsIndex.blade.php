@extends('layouts.master')

@section('head-title')
    BDE Saint-Nazaire - Nos évènements
@endsection

@section('head-meta-description')
    Le bureau des élèves de Saint-Nazaire organise de nombreux évènements !
@endsection

@push('stylesheet')
    <link href="{{ asset('css/project-css/events.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/project-css/transition.css') }}">
@endpush

<!-- Display all events (recent and past) -->

@section('content')



    <section>
        <h1 class="d-flex justify-content-center">Tous les évènements</h1>
        <hr>
        <img src="{{ asset('assets/imgs/eventsIndex.jpg') }}" alt="">
        <hr>
    </section>

    <div class="transition">
            <p class="p-scroll">Découvrez tous nos évènements !</p>

            <a href="#" class="scroll-down"></a>

        <div class="section-scroll"></div>
    </div>


        <section class="eventsGroup">

            <h2 class="eventsTitle">Évènements du mois :</h2>
            <div class="eventsList row" id="recentEventsDiv">

                    @foreach($events as $event)
                        <article class="singleEvent col-md-4">
                            <h3>{{$event->name}}</h3>
                            <!-- Event image to manage -->
                            <img src="{{ asset('storage/imagesUploaded/'.$event->image->path) }}" class="eventMainImage" alt="Image décrivant l'évènement organisé par le BDE !">
                            <a href="{{route('events.show', $event->id )}}" class="btn btn-dark">Visiter l'évènement</a>
                        </article>

                    @endforeach
            </div>
            <div class="eventsList row mt-3" id="recentEventsList">

                <!-- Call my ajax script, to load more events on click -->
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="btn btn-outline-dark mt-3" id="loadMoreRecent">Charger plus...</a>
            </div>

        </section>



    <section class="eventsGroup">

        <h2 class="eventsTitle">Évènements passés :</h2>
        <div class="eventsList row" id="pastEventsDiv">

            @foreach($past_events as $past_event)
                <article class="singleEvent col-md-4">
                    <h3>{{$past_event->name}}</h3>
                    <img src="{{ asset('storage/imagesUploaded/'.$past_event->image->path) }}" class="eventMainImage" alt="Image décrivant l'évènement organisé par le BDE !">
                    <a href="{{route('events.show', $past_event->id )}}" class="btn btn-dark">Visiter
                        l'évènement</a>
                </article>
            @endforeach
        </div>
        <div class="eventsList row mt-3" id="pastEventsList">

        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="btn btn-outline-dark loadMore mt-3" id="loadMorePast">Charger plus...</a>
        </div>
    </section>

@endsection

@push('script')
    <script src="{{ asset('js/project-js/events/loadMore.js') }}"></script>
    <script src="{{ asset('js/project-js/shop.js') }}"></script>
@endpush
