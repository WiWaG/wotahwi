@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<form action=" {{ route('admin.rooms.store') }} " method="POST">
    @csrf
    <label for="room-name">Naam van de kamer:</label>
    <input name="name" type="text" value="" id="room-name">
    <label for="room-price-night">Prijs per nacht</label>
    <input type="number" name="price_night" id="room-price-night" step="0.01" min="0" value="">
    <label for="room-description">Omschrijving van de kamer:</label>
    <textarea name="description" id="room-description" cols="30" rows="10"></textarea>

    <input type="submit">
</form>
@endsection




