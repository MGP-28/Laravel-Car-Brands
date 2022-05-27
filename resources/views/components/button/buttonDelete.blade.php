<form method="POST" action="{{ url($route) }}">
    @csrf
    @method('DELETE')
    <div class="d-flex justify-content-end align-items-center h-100">
        <button ownerid="{{$ownerid}}" class="btn {{$btnClass}} align-middle" role="button">{{$text}}</button>
    </div>
</form>
