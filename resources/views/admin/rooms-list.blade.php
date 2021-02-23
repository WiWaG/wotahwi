@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<div>
    <button><a href="{{ route('admin.rooms.create') }}">Kamer toevoegen</a></button>
</div>


    @foreach ($rooms as $room)
        <div class="m-5 w-full">
            <h2>{{ $room->name }}</h2>
            <div>
                <a href="{{ route('rooms.show', ['room' => $room]) }}">Bekijken</a>
                <a href="{{ route('admin.rooms.edit', ['room' => $room]) }}">Aanpassen</a>

                {{-- Javascript voor bevestiging; Ajax call om te verwijderen? --}}
                <form action="{{ route('admin.rooms.destroy', ['room' => $room])}}"
                    method="POST"
                    onsubmit="return confirm('Wil je kamer {{$room->name}} verwijderen?')">
                    @csrf
                    @method('DELETE')
                    <button id="deleteRoom">Verwijderen</button>
                </form>

            </div>
        </div>
    @endforeach



@endsection


