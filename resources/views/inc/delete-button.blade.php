


@auth
<form action="{{ url('images/'.$image->id) }}" method="POST" class="form-delete">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit" class="m-2 btn btn-danger float-left">
        Supprimer
    </button>
</form>
@endauth