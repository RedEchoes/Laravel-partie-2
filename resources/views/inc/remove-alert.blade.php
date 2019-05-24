<form method="POST" action="{{ route('removeAlert', $image->id) }}" class="remove-alert float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit"  class="btn btn-danger mt-0">
    Enlever les alertes
    </button>
</form>