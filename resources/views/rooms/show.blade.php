<x-app-layout>
    @section('header')

    <div class="w-full bg-cover bg-center" style="height:22rem; background-image: url('{{ $room->images[0]->file_path }}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl"> {{ $room->name }}</h1>
            </div>
        </div>
    </div>
    @endsection

    {{-- Room information--}}
    <!-- flex 2 col -->
    <div class="md:flex">
        <div class="md:w-1/3">
            <img class="" src=" {{ isset($room->images[1]) ? $room->images[1]->file_path : ''}} ">

            <img class="" src=" {{ isset($room->images[2]) ? $room->images[2]->file_path : '' }}" alt="">
        </div>
        <div class="md:flex-1 mx-8">
            <div class="my-10">
                <p class="my-3">
                    <span class="mr-3"><i class="fas fa-bed text-yellow-300 mr-4"></i> Bedden: {{ $room->facilities->contains('name', 'beds') ? $room->facilities->firstWhere('name', 'beds')->pivot->quantity : 0}}</span>
                    <span class="mx-3 text-red-500 font-bold">€ {{ $room->price_night }}</span>
                </p>
                <p>
                    {{ $room->description }}
                </p>
                <!-- Facilities Table -->
                <h1 class="font-bold text-lg py-2 text-yellow-600">Kamer faciliteiten</h1>
                <table class="border-collapse w-full table-fixed my-4">
                    <tbody>
                        <tr class="bg-white flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap">
                            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-bed mr-4 {{ $room->facilities->contains('name', 'beds') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                {{ $room->facilities->contains('name', 'beds') ? $room->facilities->firstWhere('name', 'beds')->pivot->quantity : 0}} Bedden
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-wifi mr-4 {{ $room->facilities->contains('name', 'internet') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                Gratis Wifi
                            </td>
                        </tr>
                        <tr class="bg-white flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap">
                            <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-utensils mr-4 {{ $room->facilities->contains('name', 'kitchen') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                Eigen keuken
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-wheelchair mr-4 {{ $room->facilities->contains('name', 'disability_friendly') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                Geschikt voor Rolstoelgebruikers
                            </td>
                        </tr>
                        <tr class="bg-white flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap">
                            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-bath mr-4 {{ $room->facilities->contains('name', 'bathroom') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                Privé badkamer
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b block lg:table-cell relative lg:static">
                                <i class="fas fa-parking mr-4 {{ $room->facilities->contains('name', 'parking') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                Parkeren (Gratis)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form class="mx-auto md:flex" action="/reservations" method="GET">
                <button class="ml-0 px-8 rounded-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 ... transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="submit">Reserveren</button>
            </form>
        </div>
    </div>

</x-app-layout>
