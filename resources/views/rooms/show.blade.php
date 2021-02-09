<x-app-layout>
    @section('header')
        <div class="w-full bg-cover bg-center" style="height:22rem; background-image: url('{{ $room->image_path_1 }}');">
            <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl"> {{ $room->name }}</h1>
                    <!-- <button class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Start project</button> -->
                </div>
            </div>
        </div>
    @endsection

    {{-- Room information--}}
    <!-- flex 2 col -->
    <div class="md:flex">
        <div class="md:w-1/3">
            <img class="" src=" {{ $room->image_path_2 }}" alt="">
            <img class="" src=" {{ $room->image_path_3 }}" alt="">
        </div>
        <div class="md:flex-1 mx-8">
            <div class="my-10">
                <p class="my-3">
                    <span class="mr-3"><i class="fas fa-bed text-yellow-300 mr-4"></i> Bedden: {{ $room->beds }}</span>
                    <span class="mx-3 text-red-500 font-bold">€ {{ $room->price_night }}</span>
                </p>
                <p>
                    {{ $room->description }}
                </p>
            </div>

            <form class="mx-auto md:flex" action="/reservations" method="GET">
                <input class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" type="email" name="email" id="email" placeholder="email">
                <button class="ml-0 px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r" type="submit">Reserveren</button>
            </form>
        </div>
    </div>

</x-app-layout>

