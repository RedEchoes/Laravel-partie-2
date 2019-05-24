<form method="POST" action="{{ route('removeAllAlert') }}" class="remove-all-alert col-12 mt-3 d-flex justify-content-center">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0 text-uppercase">
    Enlever les alertes de toutes les images
    </button>
</form>