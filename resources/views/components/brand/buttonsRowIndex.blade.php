@component('components.button.button',['ownerid' => $player->id, 'route' => 'players/'.$player->id, 'btnClass' => 'btn-success', 'text' => 'Show'])
@endcomponent
@component('components.button.button',['ownerid' => $player->id, 'route' => 'players/'.$player->id.'/edit', 'btnClass' => 'btn-primary', 'text' => 'Edit'])
@endcomponent
@component('components.button.buttonDelete',['ownerid' => $player->id, 'route' => 'players/'.$player->id, 'btnClass' => 'btn-danger', 'text' => 'Delete'])
@endcomponent
