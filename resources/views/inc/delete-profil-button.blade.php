<form method="POST" action="{{ url('users/'.$user->id) }}" class="form-delete float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-danger btn-sm pull-right float-right">
    <i class="fas fa-angry fa-lg"> Supprimer mon compte
    </button>
</form> 