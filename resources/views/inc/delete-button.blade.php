


@auth

{!! Form::open(['action' => ['ImageController@destroy', $image->id], 'method' => 'POST']) !!}
{{ Form::button('<i class="fas fa-trash-alt fa-2x"></i>', ['class' => 'form-delete', 'type' => 'submit']) }}
{{ Form::hidden('_method', 'DELETE')}}
{{!! Form::close() !!}} 
<!-- <form action="{{ url('images/'.$image->id) }}" method="POST" class="form-delete">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit" class="m-2 btn btn-danger float-left">
        Supprimer
    </button>
</form> -->
@endauth

