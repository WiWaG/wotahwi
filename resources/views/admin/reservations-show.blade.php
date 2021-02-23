@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

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


