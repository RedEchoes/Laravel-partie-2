@auth
<form action="/alert/{{ $image->id }}" method="POST">
@csrf
    <button type="submit" class="m-2 btn btn-info ml-1">
        Signaler
    </button>
</form>
@endauth