@extends('master.main')

@section('content')
    @component('components.player.formShow',['player' => $player])
    @endcomponent
@endsection
