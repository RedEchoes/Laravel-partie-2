<form method="POST" action="{{ url('user/'.$user->id) }}" class="delete-user float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0">
    Supprimer le compte
    </button>
</form>
