@extends('master.main')

@section('content')
    @component('components.brand.tableIndex',['brands' => $brands])
    @endcomponent
@endsection
