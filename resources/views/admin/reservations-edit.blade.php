@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')

<div class="container bg-yellow-300 p-2 lg:p-4">
    <div class="rounded bg-white shadow-xl p-5 lg:p-20 mx-auto text-gray-800">

        <form action=" {{ route('admin.reservations.update', ['reservation' => $reservation]) }} " method="POST">
            @csrf
            @method('PUT')

            <h2>Reservering {{ $reservation->id }}</h2>

            <input type="date" name="start_date">
            <input type="date" name="end_date">
            <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        </form>
    </div>
</div>

@endsection




