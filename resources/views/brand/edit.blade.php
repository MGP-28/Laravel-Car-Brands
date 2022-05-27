@extends('master.main')

@section('content')
    @component('components.player.formEdit', ['player' => $player])
    @endcomponent
@endsection
