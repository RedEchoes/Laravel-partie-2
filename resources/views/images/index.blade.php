@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex flex-wrap justify-content-center">
            @foreach ($images as $image)
           
            <div id="image-{{ $image->id }}">
                <div class="card m-2" id="image-{{ $image->id }}">
                    <div class="popup-gallery">
                        <a href="/storage/images/{{$image->name}}"><img src="/storage/thumbs/{{$image->name}}"
                                alt="images" class="image" /></a>
                    </div>
                    <div class="card-body">
                        <p>Image par {{ $image->user->name }}</p>
                        <p>{{$image->created_at}}</p>
                        <p>{{$image->location->name}}</p>
                    </div>
                    <div class="row ml-0">
                        @auth
                        @include('inc.delete-button')
                        @include('inc.alert-button')
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mx-auto">
            {{ $images->links() }}
        </div>
    </div>
</div>

@endsection
