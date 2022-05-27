<div class="container">
    @component('components.title.title',['text' => 'EDIT BRAND'])
    @endcomponent
    <form method="POST" action="{{ url('brands/'.$brand->id) }}" class="border rounded p-4">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ $brand->name }}"
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
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
</div>
