
<form method="POST" action="{{ url('users/'.$user->id) }}" class="form-delete float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit"  class="btn btn-danger mt-0">
    Supprimer
    </button>
</form> 
