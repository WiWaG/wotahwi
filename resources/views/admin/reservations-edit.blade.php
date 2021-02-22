@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')

<form action=" {{ route('admin.reservations.update', ['reservation' => $reservation]) }} " method="POST">
    @csrf
    @method('PUT')

    <h2>Reservering {{ $reservation->id }}</h2>

    <input type="date" name="start_date">
    <input type="date" name="end_date">
    <input type="submit">
</form>

@endsection




