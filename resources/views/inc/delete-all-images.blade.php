<form method="POST" action="{{ route('destroyAll') }}" class="delete-all-images float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0">
    Supprimer
    </button>
</form>