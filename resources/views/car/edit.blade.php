@extends('master.main')

@section('content')
    @component('components.car.formEdit', ['brands' => $brands, 'car' => $car])
    @endcomponent
@endsection
