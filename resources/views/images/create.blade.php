@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center pt-5">
            <form action="{{ url("images") }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Verifiez les informations
                </div>
                @endif
                    <div class="form-group">
                        <label for="locations" class="col-sm-3 control-label">Locations</label>
                        <div class="col-sm-6 col-md-12 col-lg-12">
                            <select class="form-control" name="location_id" id="locations">
                                @foreach($locations as $id => $name)
                                <option value="{{ $id }}">
                                    {{ $name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <a href="{{ url("location") }}" type="submit" class="btn btn-default">
                                Ajouter un lieu
                            </a>
                        </div>
                    </div>
               
                <div class="form-group">
                    <div class="col-sm-6 col-md-12 col-lg-12">
                        <input type="file" id="image" name="image"
                            class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" required>
                        @if($errors->has('image'))
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-success">
                            Soumettre
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
