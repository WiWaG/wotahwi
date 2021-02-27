<x-app-layout>
    @section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Onze kamers') }}
    </h2>
    @endsection


    <!-- component -->
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <div class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">B&B Groningen</a>
                <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                    <h3 class="border-b-2">B&B info</h3>
                </a>
                <ul class="px-4 text-sm">
                    <li><a href="mailto:Wotahwi@codegorilla.nl"><i class="far fa-envelope mr-2"></i>Wotahwi@codegorilla.nl
                        </a></li>
                    <li><a href="tel:06-123-45467"><i class="fas fa-phone-alt  mr-2"></i>06-123-4567
                        </a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt mr-2"></i>Groningen</a></li>
                </ul>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                    <h3 class="border-b-2 mb-2">Over ons</h3>
                    <p>Laravel project (codeGorilla). Webapp voor het online informeren, reserveren, boeken en betalen voor een verblijf bij WoTahWi B&B</p>
                </a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('reservations.create')}}">
                    <h3 class="border-b-2">Reserveren</h3>
                </a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Slaapplaatsen per kamer</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">2 Tot 4</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">5 tot 8</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="flex-1">

            <!-- Overview of available rooms -->
            <div class="flex flex-wrap max-h-screen overflow-auto">
                @foreach ($rooms as $room)
                <div class="p-2 w-full 2xl:w-1/2">

                    {{-- Room card --}}
                    <div class="w-full lg:flex mb-2">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover bg-center rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ $room->images[0]->file_path }}')" title="{{ $room->name }}">
                        </div>
                        <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8">
                                <span class="text-sm text-grey-dark flex items-center">

                                    {{-- bed icon --}}
                                    <i class="fas fa-bed mr-4 {{ $room->facilities->contains('name', 'beds') ? 'text-yellow-300' : 'text-gray-300' }}"></i>
                                    {{ $room->facilities->firstWhere('name', 'beds')->pivot->quantity }}

                                    {{-- wifi icon --}}
                                    <i class="fas fa-wifi mr-4 {{ $room->facilities->contains('name', 'internet') ? 'text-yellow-300' : 'text-gray-300' }}"></i>

                                    {{-- weelchair icon --}}
                                    <i class="fas fa-wheelchair mr-4 {{ $room->facilities->contains('name', 'disability_friendly') ? 'text-yellow-300' : 'text-gray-300' }}"></i>

                                    {{-- parking icon --}}
                                    <i class="fas fa-parking mr-4 {{ $room->facilities->contains('name', 'parking') ? 'text-yellow-300' : 'text-gray-300' }}"></i>

                                    {{-- kitchen icon --}}
                                    <i class="fas fa-utensils mr-4 {{ $room->facilities->contains('name', 'kitchen') ? 'text-yellow-300' : 'text-gray-300' }}"></i>

                                    {{-- bathroom icon --}}
                                    <i class="fas fa-bath mr-4 {{ $room->facilities->contains('name', 'bathroom') ? 'text-yellow-300' : 'text-gray-300' }}"></i>

                                </span>

                                <div class="text-black font-bold text-xl mb-2">
                                    <a href="/rooms/{{ $room->id }}" class="rounded-lg font-bold px-2 transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-white">{{ $room->name }}</a>
                                </div>
                                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-red-500 font-bold">
                                    <h3>€ {{ $room->price }} </h3>
                                </div>
                                <div>
                                    <a href="/rooms/{{ $room->id }}" class="border-2 border-yellow-300 rounded-lg font-bold px-4 py-2 transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-white mr-6 ml-4">
                                        Meer info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
