<div class="container">
    @component('components.title.title',['text' => 'ADD PLAYER'])
    @endcomponent
    <form method="POST" action="{{ url('players') }}" class="border rounded p-4">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                class="form-control @error('address') is-invalid @enderror"
                value="{{ old('address') }}"
                required
                aria-describedby="addressHelp"
            >
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('address')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    rows="4"
                    type="text"
                    id="description"
                    name="description"
                    autocomplete="description"
                    class="form-control @error('description') is-invalid @enderror"
                    value="{{ old('description') }}"
                    aria-describedby="descriptionHelp"
                ></textarea>
                <small id="nameHelp" class="form-text text-muted"></small>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <div class="mr-3">
                    <span>Retired?</span>
                </div>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" name="retired" type="radio" id="retired-true" value="1">
                    <label class="form-check-label" for="retired">Yes</label>
                </div>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" name="retired" type="radio" id="retired-false" value="0">
                    <label class="form-check-label" for="retired">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @error('retired')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </form>
</div>
