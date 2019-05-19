@extends('layouts.app')
@admin
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url("user") }}">Utilisateurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">Modification</li>
  </ol>
</nav>
<div class="container">
    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('user.update', $user->id) }}" class="col-6">
            @csrf
            @method('PUT')
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                'value' => $user->name,
            ])
            @include('partials.form-group', [
                'title' => __('Adresse courriel'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                'value' => $user->email,
            ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
            </div>
            </div>
@endsection
@endadmin