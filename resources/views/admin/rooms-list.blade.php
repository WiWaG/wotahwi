@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
    <button><a href="{{ route('admin.rooms.create') }}">Kamer toevoegen</a></button>

    @foreach ($rooms as $room)
        <div class="m-5">
            <h2>{{ $room->name }}</h2>
            <div>
                <a href="{{ route('rooms.show', ['room' => $room]) }}">Bekijken</a>
                <a href="{{ route('admin.rooms.edit', ['room' => $room]) }}">Aanpassen</a>
                <a href="{{ route('admin.rooms.destroy', ['room' => $room]) }}">Verwijderen</a> {{-- Javascript voor bevestiging; Ajax call om te verwijderen? --}}
            </div>
        </div>
    @endforeach



@endsection


