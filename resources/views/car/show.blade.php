@extends('master.main')

@section('content')
    @component('components.brand.formShow',['brand' => $brand])
    @endcomponent
@endsection
