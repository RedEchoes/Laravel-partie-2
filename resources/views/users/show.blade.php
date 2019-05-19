
@extends('layouts.app')
@admin
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url("user") }}">Utilisateurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">Fiche de l'utilisateur</li>
  </ol>
</nav>
<div class="d-flex justify-content-center align-items-center">
     <div class="card col-6">
  <div class="card-header">
  <i class="fas fa-user mr-2"></i>  Fiche de l'utilisateur
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ "Nom" . ' : ' .  $user->name }}</li>
    <li class="list-group-item">{{ "Courriel" . ' : ' .  $user->email }}</li>
    <li class="list-group-item">{{ "Rôle" . ' : ' .  $user->role }}</li>
    <li class="list-group-item">{{ "Date de l'inscription" . ' : ' .  $user->created_at }}</li>
    <li class="list-group-item">{{ "Date de vérification du courriel" . ' : ' .  $user->email_verified_at }}</li>
  </ul>
</div>
</div>

 @endsection
@endadmin
 