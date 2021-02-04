<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Onze kamers') }}
        </h2>
    </x-slot>

    {{-- Overview of available rooms --}}
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 grid grid-cols-3 gap-4">

        @foreach ($rooms as $room)

        {{-- Room card --}}
            <div class="lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-lg bg-white my-12 mx-8">
                {{-- Card Image --}}
                <img src="{{ $room->image }}" alt=""class="overflow-hidden">
                {{-- Card Content  --}}
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase">{{ $room->name }}</h3>
                    {{-- <p class="text-justify">The be might what days revellers, which sought to a nor. Land from to suits his some. Saw him counsel begun mother though but. Ofttimes soils of since mighty pollution.</p> --}}
                    <div class="mt-5">
                        <span class="rounded-full py-2 px-3 mx-1 font-semibold hover:text-white bg-gray-400 text-gray-100"> Bedden: {{ $room->beds }} </span>
                        <span class="rounded-full py-2 px-3 mx-1 font-semibold hover:text-white bg-gray-400 text-gray-100"> €{{ $room->price }} </span>
                        <a href="/rooms/{{ $room->id }}" class="hover:bg-gray-700 rounded-full py-2 px-3 mx-1 font-semibold hover:text-white bg-gray-400 text-gray-100">Meer info</a>
                    </div>
                </div>
            </div>


        @endforeach
    </div>

</x-app-layout>
