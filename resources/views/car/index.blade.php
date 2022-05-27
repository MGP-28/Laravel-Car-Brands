@extends('master.main')

@section('content')
    @component('components.car.tableIndex',['cars' => $cars])
    @endcomponent
@endsection
