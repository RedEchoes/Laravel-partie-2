
@foreach ($users as $user)
    <tr id="user-{{ $user->id }}">
        <td class="text-primary"><strong>{{ $user->name }}</strong></td>
        <td>{!! link_to_route('user.show', trans('Voir'), [$user->id], ['class' => 'btn btn-success btn-block btn']) !!}</td>
        <td>{!! link_to_route('user.edit', trans('Modifier'), [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
        <td>@include('inc.delete-button-user')</td>
    </tr>
@endforeach