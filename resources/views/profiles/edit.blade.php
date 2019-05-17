@extends('layouts.form')

@section('card')
    @component('components.card')
    @include('inc.delete-button-user')
        @slot('title')
            @lang('Modifer le profil')
            <a href="{{ route('profile.destroy', $user->id) }}" class="btn btn-danger btn-sm pull-right float-right" role="button" aria-disabled="true"><i class="fas fa-angry fa-lg"></i> @lang('Supprimer mon compte')</a>
        @endslot
        
        <form method="POST" action="{{ route('profile.update', $user->id) }}">
            @csrf
            @method('PUT')
            @include('partials.form-group', [
                'title' => __('Pseudo'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                'value' => $user->name,
            ])
            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                'value' => $user->email,
            ])
            @include('partials.form-group', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                'value' => $user->password,
            ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent
@endsection