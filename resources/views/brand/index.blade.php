@extends('master.main')

@section('content')
    @component('components.player.tableIndex',['players' => $players])
    @endcomponent
@endsection
