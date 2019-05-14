@extends('layouts.app')

@section('content')
<div class="table-responsive col-lg-12">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="4">Nom de l'utilisateur</th>
            </tr>
        </thead>
        <tbody>
          @include('users.table')
    </tbody>
    </table>
</div>
@endsection