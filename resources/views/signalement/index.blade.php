@extends('layouts.app')
@admin
@section('content')
<div id="removePhotos" class="container">
    <div class="row">
        <div class="d-flex flex-wrap justify-content-center">
        @include('inc.delete-all-images')
        @include('inc.remove-all-alert')
            @foreach ($images as $image)
           
            <div id="image-{{ $image->id }}">
                <div class="card m-2" id="image-{{ $image->id }}">
                    <div class="popup-gallery">
                        <a href="/storage/images/{{$image->name}}"><img src="/storage/thumbs/{{$image->name}}"
                                alt="images" class="image" /></a>
                    </div>
                    <div class="card-body">
                        <p>Image par: {{ $image->user->name }}</p>
                        <p>Date: {{$image->created_at}}</p>
                        <p>Ville: {{$image->location->name}}</p>
                        <p>Nombre de signalements: {{$image->users()->count()}}</p>
                    </div>
                    <div class="row ml-0">
                        @auth
                        @include('inc.delete-button')
                        @include('inc.alert-button')
                        @include('inc.remove-alert')
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
@endadmin
@endsection