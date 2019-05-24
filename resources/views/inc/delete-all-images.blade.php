<form method="POST" action="{{ route('destroyAll') }}" class="delete-all-images col-12 d-flex justify-content-center">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0 text-uppercase">
    Supprimer toutes les images signalées
    </button>
</form>