@extends('layouts.form')
@section('card')

    @component('components.card')
    
        @slot('title')
            @lang('Modifer le profil')
            @include('inc.delete-profil-button')
        @endslot
        
        <form method="POST" action="{{ route('profile.update', $user->id) }}">
            @csrf
            @method('PUT')
            @include('partials.form-group', [
                'title' => __("Entrer un nouveau nom d'utilisateur"),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                'value' => $user->name,
            ])
            @include('partials.form-group', [
                'title' => __("Entrer une nouvelle adresse couriel"),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                'value' => $user->email,
            ])
            @include('partials.form-group', [
                'title' => __("Entrer un nouveau mot de passe"),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                'value' => "Entrer un nouveau mot de passe",
            ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent
@endsection