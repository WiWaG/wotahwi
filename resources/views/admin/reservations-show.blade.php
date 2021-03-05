@extends('layouts.dashboard')

@section('content')

<div class="my-5">
    Reservatie:
    {{ $reservation }}
</div>

<div class="my-5">
    Gebruiker:
    {{ $reservation->user}}
</div>

<div class="my-5">
    Kamer:
    {{ $reservation->room[0]}}
</div>


@endsection


