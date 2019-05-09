@adminOrOwner($image->user_id)
<form method="POST" action="{{ url('images/'.$image->id) }}" class="form-delete float-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">
    <i class="fa fa-trash"></i>
    </button>
</form> 
@endadminOrOwner 
