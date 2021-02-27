@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<div class="container bg-yellow-300 p-2 lg:p-4">

    <!-- Edit Form  -->
    <div class="rounded bg-white shadow-xl p-5 lg:p-20 mx-auto text-gray-800">

    <form action=" {{ route('admin.rooms.update', ['room' => $room]) }} " method="POST">
        @csrf
        @method('PUT')
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Kamer toevoegen</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-name">
                    Naam van de kamer:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="name" id="room-name" type="text" value="{{ $room->name }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-price-night">
                    Prijs per nacht
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 name="price_night" id="room-price-night" type="number" step="0.01" min="0" value="{{ $room->price_night}}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-description">
                    Omschrijving van de kamer:
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 name="description" id="room-description" rows="10" required>{{ $room->description }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button id="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    opslaan
                </button>
            </div>

        </form>

    </div>
</div>

@endsection




