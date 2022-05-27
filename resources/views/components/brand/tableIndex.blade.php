<div class="container">
    @component('components.title.title',['text' => 'PLAYERS'])
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
        @component('components.table.header',['headerData' => ['ID','Name','Address','Retired','Actions']])
        @endcomponent
        @foreach($players as $player)
            @component('components.player.rowIndex',['brand' => $player])
            @endcomponent
        @endforeach
    </table>
    @component('components.button.buttonDeleteAll',['text' => 'PLAYERS'])
    @endcomponent
    <div class="container d-flex justify-content-center">
        {{$players->links()}}
    </div>
</div>
