<div class="container">
    @component('components.title.title',['text' => 'CARS'])
    @endcomponent
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table class="table border rounded table-striped">
        @component('components.table.header',['headerData' => ['ID','Registration','Brand', 'Year of Manufacture', 'Color','Actions']])
        @endcomponent
        @foreach($cars as $car)
            @component('components.car.rowIndex',['car' => $car])
            @endcomponent
        @endforeach
    </table>
    <div class="container d-flex justify-content-center">
        {{$cars->links()}}
    </div>
</div>
