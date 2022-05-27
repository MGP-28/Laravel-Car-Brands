@extends('master.main')

@section('content')
    @component('components.car.formCreate', ['brands' => $brands])
    @endcomponent
@endsection
