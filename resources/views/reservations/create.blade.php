<x-app-layout>
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reserveer form') }}
        </h2>
    @endsection
    <div class="container mx-auto">
        {{-- Reservation Form --}}
        <form action="{{ route('reservations.store') }}" method="POST" id="reservation-form">
        @csrf
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-4 flex flex-col my-2">
            <div class="-mx-3 my-2">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                {{-- Room Select --}}
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="room-select">
                    Kamer selecteren
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" name="room_id" id="room-select" required>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}" {{ (isset($chosen_room) && $room->id === $chosen_room->id ? 'selected' : '' ) }}>
                                    {{ $room->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            {{-- Datepicker --}}
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="start-date">
                    Aankomst
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="start-date" type="text" name="start_date" required>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="end-date">
                    Vertrek
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="end-date" type="text" name="end_date" required>
                </div>
            </div>

            <div class="-mx-3 md:flex mb-2">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    {{-- Persons --}}
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="persons">
                        Aantal personen
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" type="number" name="persons" id="persons" min="1" max="10" placeholder="Aantal personen">
                </div>
                <div class="md:w-1/2 px-3">
                    {{-- Pay select --}}
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="pay">
                    Betaal selecteren
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="pay">
                            <option>iDeal</option>
                            <option>PayPal</option>
                        </select>
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    {{-- Total Price --}}
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="price-total">
                    Totale Prijs
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" type="number" name="price_total" id="price-total" value="" readonly>
                </div>
            </div>
            <div class="-mx-3 my-8">
                <div class="md:w-1/2 px-3">
                    <button type="submit" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 md:py-4 md:text-lg md:px-10 ... transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Reserveren
                    </button>
                </div>
            </div>
        </div>

        </form>
    </div>

    @section('scripts')
    <script>
        const bookedDates = @json($bookedDates);

        const priceTotalInput = document.querySelector('#price-total');

        const pricesNight = @json($rooms->pluck('price','id'));

        const formElements = document.querySelectorAll('#reservation-form input, #reservation-form select').forEach( elem => {

            elem.addEventListener("change", () => {
            let days = getDays(document.querySelector('#start-date').value, document.querySelector('#end-date').value);
            priceTotalInput.value = pricesNight[document.querySelector('#room-select').value] * days;

            });

        });

        function getDays(startDate, endDate) {
            let startDateParts = startDate.split("-");
            let endDateParts = endDate.split("-");
            let dateDiff = new Date(+endDateParts[2], endDateParts[1] - 1, +endDateParts[0]) - new Date(+startDateParts[2], startDateParts[1] - 1, +startDateParts[0]);
            let days = dateDiff / (1000 * 60 * 60 * 24);
            return days;
        }

    </script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    @endsection

</x-app-layout>



