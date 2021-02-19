@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')

<form action=" {{ route('admin.rooms.update', ['room' => $room]) }} " method="POST">
    @csrf
    @method('PUT')

    <input type="text" value=" {{ $room->name }}">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="submit">
</form>

@endsection




