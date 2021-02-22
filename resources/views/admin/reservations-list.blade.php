@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')

        <div class="h-48 w-48 bg-yellow-200">Calendar placeholder</div>

    @foreach ($reservations as $reservation)
        <div class="m-5 w-full">
            <h2>{{ $reservation->id }}, {{ $reservation->start_date}}, {{ $reservation->end_date }} </h2>
            <div>
                <a href="{{ route('admin.reservations.show', ['reservation' => $reservation]) }}">Bekijken</a>
                <a href="{{ route('admin.reservations.edit', ['reservation' => $reservation]) }}">Aanpassen</a>
                {{-- Javascript voor bevestiging; Ajax call om te verwijderen? --}}
                <form action="{{ route('admin.reservations.destroy', ['reservation' => $reservation])}}"
                    method="POST"
                    onsubmit="return confirm('Wil je kamer {{$reservation->name}} verwijderen?')">
                    @csrf
                    @method('DELETE')
                    <button id="deleteReservation">Verwijderen</button>
                </form>
            </div>
        </div>
    @endforeach

@endsection


