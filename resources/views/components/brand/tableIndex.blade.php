<div class="container">
    @component('components.title.title',['text' => 'BRANDS'])
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
        @component('components.table.header',['headerData' => ['ID','Name','Vehicles', 'Actions']])
        @endcomponent
        @foreach($brands as $brand)
            @component('components.brand.rowIndex',['brand' => $brand])
            @endcomponent
        @endforeach
    </table>
    <div class="container d-flex justify-content-center">
        {{$brands->links()}}
    </div>
</div>
