<div class="container">
    @component('components.title.title',['text' => 'ADD CAR'])
    @endcomponent
    <form method="POST" action="{{ url('cars') }}" class="border rounded p-4">
        @csrf

        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                class="form-control @error('registration') is-invalid @enderror"
                value="{{ old('registration') }}"
                required
                aria-describedby="registrationHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
            @error('registration')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <select
                class="form-control @error('brand') is-invalid @enderror"
                id="brand"
                name="brand"
                required
                aria-describedby="brand"
            >
                @foreach($brands as $brand)
                    <option>{{$brand->name}}</option>
                @endforeach
            </select>
            @error('brand')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Year of Manufacture</label>
            <select
                class="form-control @error('year_of_manufacture') is-invalid @enderror"
                id="exampleFormControlSelect1"
                name="year_of_manufacture"
                required
                aria-describedby="year_of_manufactureHelp"
            >
                @for($i = now()->year; $i >= 1910; $i--)
                    <option>{{$i}}</option>
                @endfor
            </select>
            @error('year_of_manufacture')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                class="form-control @error('color') is-invalid @enderror"
                value="{{ old('color') }}"
                required
                aria-describedby="colorHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
            @error('color')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create car</button>
    </form>
</div>
