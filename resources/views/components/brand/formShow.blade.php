<div class="container">
    @component('components.title.title',['text' => 'Show Player'])
    @endcomponent
    <form method="" action="" class="border rounded p-4">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                disabled
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                class="form-control"
                value="{{ $player->name }}"
                required
                aria-describedby="nameHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input
                disabled
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                class="form-control"
                value="{{ $player->address }}"
                required
                aria-describedby="addressHelp"
            >
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    disabled
                    rows="4"
                    type="text"
                    id="description"
                    name="description"
                    class="form-control"
                    aria-describedby="descriptionHelp"
                >{{ $player->description }}</textarea>
                <small id="nameHelp" class="form-text text-muted"></small>
            </div>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <div class="mr-3">
                    <span>Retired?</span>
                </div>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" name="retired" type="radio" id="retired-true" value="1" @if($player->retired) checked @else disabled @endif>
                    <label class="form-check-label" for="retired">Yes</label>
                </div>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" name="retired" type="radio" id="retired-false" value="0" @if(!$player->retired) checked @else disabled @endif>
                    <label class="form-check-label" for="retired">No</label>
                </div>
            </div>
            <a type="button" class="btn btn-primary" href="{{ url('players') }}">Back</a>
        </div>
    </form>
</div>
