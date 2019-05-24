<form method="POST" action="{{ route('removeAllAlert') }}" class="remove-all-alert float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0">
    Enlever toutes les alertes des images
    </button>
</form>