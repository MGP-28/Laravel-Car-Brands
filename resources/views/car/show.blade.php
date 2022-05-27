@extends('master.main')

@section('content')
    @component('components.car.formShow',['car' => $car])
    @endcomponent
@endsection
