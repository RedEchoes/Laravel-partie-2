@adminOrOwner($image->user_id)
<form method="POST" action="{{ url('images/'.$image->id) }}" class="image-delete float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">
    <i class="fa fa-trash fa-2x"></i>
    </button>
</form> 
@endadminOrOwner 
