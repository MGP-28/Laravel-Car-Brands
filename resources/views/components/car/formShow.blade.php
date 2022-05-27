<div class="container">
    @component('components.title.title',['text' => 'SHOW CAR'])
    @endcomponent
    <form class="border rounded p-4">
        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                class="form-control"
                value="{{ $car->registration }}"
                disabled
                aria-describedby="registrationHelp"
            >
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input
                type="text"
                id="brand"
                name="brand"
                class="form-control"
                value="{{ $car->brand->name }}"
                disabled
                aria-describedby="brandHelp"
            >
        </div>
        <div class="form-group">
            <label for="year_of_manufacture">Year of Manufacture</label>
            <input
                type="text"
                id="year_of_manufacture"
                name="year_of_manufacture"
                class="form-control"
                value="{{ $car->year_of_manufacture }}"
                disabled
                aria-describedby="year_of_manufactureHelp"
            >
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                class="form-control"
                value="{{ $car->color }}"
                disabled
                aria-describedby="colorHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
        </div>

        <a class="btn btn-primary" href="{{url('cars')}}">Back</a>
    </form>
</div>
