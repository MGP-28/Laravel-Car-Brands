@component('components.button.button',['ownerid' => $brand->id, 'route' => 'brands/'.$brand->id, 'btnClass' => 'btn-success', 'text' => 'Show'])
@endcomponent
@component('components.button.button',['ownerid' => $brand->id, 'route' => 'brands/'.$brand->id.'/edit', 'btnClass' => 'btn-primary', 'text' => 'Edit'])
@endcomponent
@component('components.button.buttonDelete',['ownerid' => $brand->id, 'route' => 'brands/'.$brand->id, 'btnClass' => 'btn-danger', 'text' => 'Delete'])
@endcomponent
