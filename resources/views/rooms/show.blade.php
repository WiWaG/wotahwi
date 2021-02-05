<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $room->name }}
        </h2>
    </x-slot>

    {{-- Room information--}}
    <div class="grid grid-cols-3 gap-4">
        <img class="" src=" {{ $room->image_path_1 }}" alt="">
        <img class="" src=" {{ $room->image_path_2 }}" alt="">
        <img class="" src=" {{ $room->image_path_3 }}" alt="">
    </div>
    <div class="w-1/2 mx-auto my-10">
        <p class="my-3">
            <span class="mr-3">Bedden: {{ $room->beds }}</span>
            <span class="mx-3">€{{ $room->price_night }}</span>
        </p>
        <p>
            {{ $room->description }}
        </p>
    </div>

    <form class="mx-auto w-1/2 flex" action="/reservations" method="GET">
        <input class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" type="email" name="email" id="email" placeholder="email">
        <button class="ml-0 px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r" type="submit">Reserveren</button>
    </form>

</x-app-layout>

