@component('components.button.button',['ownerid' => $car->id, 'route' => 'cars/'.$car->id, 'btnClass' => 'btn-success', 'text' => 'Show'])
@endcomponent
@component('components.button.button',['ownerid' => $car->id, 'route' => 'cars/'.$car->id.'/edit', 'btnClass' => 'btn-primary', 'text' => 'Edit'])
@endcomponent
@component('components.button.buttonDelete',['ownerid' => $car->id, 'route' => 'cars/'.$car->id, 'btnClass' => 'btn-danger', 'text' => 'Delete'])
@endcomponent
