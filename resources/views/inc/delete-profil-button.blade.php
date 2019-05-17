<form method="POST" action="{{ url('user/'.$user->id) }}" class="form-delete float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger btn-sm pull-right float-right">
    Supprimer mon compte
    </button>
</form> 