@extends('master.main')

@section('content')
    @component('components.brand.formEdit', ['brand' => $brand])
    @endcomponent
@endsection
