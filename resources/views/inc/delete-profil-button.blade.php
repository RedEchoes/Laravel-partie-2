<form method="POST" action="{{ route('profile.destroy', $user->id) }}" class="float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0">
    Supprimer le compte
    </button>
</form>
