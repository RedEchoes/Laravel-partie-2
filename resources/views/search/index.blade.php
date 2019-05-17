@extends('layouts.app')

@section('content')

<div class="container page-rechercher">
    <!-- Search form -->
    <div class="page-search pr-3 pb-3">
        <form action="/search" method="POST" role="search" class="form-inline active-pink-4 col-lg-3">
            {{ csrf_field() }}
            <input class="form-control form-control-sm mr-3 w-75 active-pink-4 search" type="text" name="q"
                placeholder="Search..." aria-label="Search">
            <button type="submit">
                <i class="fas fa-search fa-2x" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    @if(isset($details))
    
    <p> Votre résultat de la recherche <b class="font-weight-bold"> {{ $query }} </b> est :</p>
                <div class="d-flex flex-wrap justify-content-between">
                    @foreach($details as $location)
                    
                    @foreach($location->images as $image)
                   
                        <div class="d-flex flex-column mt-5">
                            
                            <div class="popup-gallery">
                                <a href="/storage/images/{{$image->name}}"><img src="/storage/thumbs/{{$image->name}}"
                                        alt="images" class="image" /></a>
                            </div>
                            <p>Image par {{ $image->user->name }}</p>
                            <p>{{$image->created_at}}</p>
                            <p>{{$image->location->name}}</p>
                            <div class="row ml-0">
                                @auth
                                @include ('inc.delete-button')
                                @include('inc.alert-button')
                                @endauth
                            </div>
                    </div><!-- row -->
                    @endforeach
                    @endforeach
                </div>
    @endif
</div>


@endsection
