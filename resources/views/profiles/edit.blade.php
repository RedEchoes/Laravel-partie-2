@extends('layouts.form')
@section('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
@endsection
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifer le profil')
            <a href="{{ route('profile.destroy', $user->id) }}" class="btn btn-danger btn-sm pull-right float-right" role="button" aria-disabled="true"><i class="fas fa-angry fa-lg"></i> @lang('Supprimer mon compte')</a>
        @endslot
        <form method="POST" action="{{ route('profile.update', $user->id) }}">
            @csrf
            @method('PUT')
            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                'value' => $user->email,
            ])
            <a href="{{ route('profile.show', $user->id) }}" class="btn btn-warning invisible" role="button" aria-disabled="true"><i class="fas fa-dolly fa-lg"></i> @lang('Exporter mes données personnelles')</a>
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent
@endsection

    @include('partials.script-delete', ['text' => __('Vraiment supprimer votre compte ?'), 'return' => 'home'])
