@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach ($images as $image)
         
    <img src="/storage/thumbs/{{$image->name}}"alt="images"/>
             <p>{{$image->created_at}}</p>
              @auth
               @include('inc.delete-button')
               @include('inc.edit-button')
              @endauth
            @endforeach
        

        </div>
    </div>
</div>
@endsection