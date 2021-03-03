@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<div class="container bg-yellow-300 p-2 lg:p-4">

<div class="h-48 w-48 bg-yellow-200">Calendar placeholder</div>

    <!-- Reservations Table -->
    <div>
        <div class="shadow overflow-hidden border border-gray-200 sm:rounded-lg m-6">

            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-wotahwi">
                    <tr>
                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        </th>

                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Reserveringen id
                        </th>

                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kammer naam
                        </th>

                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Start datum
                        </th>

                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        End datum
                        </th>

                        <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acties
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white text-xs divide-y divide-gray-200">
                @foreach ($reservations as $reservation)
                    <tr>
                        <td class="px-2 py-4 whitespace-nowrap">
                        </td>

                        <td class="px-2 py-4 whitespace-nowrap">
                        # {{ $reservation->id }}
                        </td>

                        <td class="px-2 py-4 whitespace-nowrap">
                        {{$reservation->room[0]->name}}
                        </td>

                        <td class="px-2 py-4 whitespace-nowrap">
                        {{ $reservation->start_date}}
                        </td>

                        <td class="px-2 py-4 whitespace-nowrap">
                        {{ $reservation->end_date}}
                        </td>

                        <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">

                            <div class="flex justify-start space-x-1">
                                <a  href="{{ route('admin.reservations.show', ['reservation' => $reservation]) }}" class="border-2 border-indigo-200 rounded-md p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-indigo-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.reservations.edit', ['reservation' => $reservation]) }}" class="border-2 border-indigo-200 rounded-md p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                                {{-- Javascript voor bevestiging; Ajax call om te verwijderen? --}}
                                <form action="{{ route('admin.reservations.destroy', ['reservation' => $reservation])}}" method="POST" onsubmit="return confirm('Wil je kamer {{$reservation->name}} verwijderen?')">
                                    @csrf
                                    @method('DELETE')
                                    <button id="deleteReservation" class="border-2 border-red-200 rounded-md p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection


