
@extends('layouts.app')

@section('content')
<div class="container">
<h3 class="d-flex justify-content-center p-3">Ajouter un lieu</h3>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 col-lg-6 p-5">
            <form action="{{ url("location") }}" method="POST" class="form-horizontal">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Verifiez les informations
                </div>
                @endif
                    <div class="form-row">
                        <div class="col pb-3">
                            <input type="text" name="name" class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}" placeholder="Location">
                            @if($errors->has('text'))
                      <div class="invalid-feedback">{{ $errors->first('text') }}</div>
                    @endif
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6 m-0">
                        <button type="submit" class="btn-location btn btn-success">
                            Soumettre
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
