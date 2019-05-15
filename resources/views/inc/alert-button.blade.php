@auth
<form action="/alert/{{ $image->id }}" class="btnAlert" method="GET">
@csrf
    <button type="submit">
    <i class="fas fa-exclamation-triangle fa-2x"></i>
    </button>
</form>
@endauth