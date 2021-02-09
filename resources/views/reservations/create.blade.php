<x-app-layout>
    <link rel="stylesheet" href="../css/datepicker.css">
    <h1>Reserveer form</h1>

    {{-- Reservation Form --}}
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        {{-- Room Select --}}
        <select name="room_id" id="room-select" required>
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}"> {{ $room->name}} </option>
            @endforeach
        </select>

        {{-- Datepicker --}}
        <div id="datepicker">
            <input type="text" name="start_date" required>
            <span>tot</span>
            <input type="text" name="end_date" required>
        </div>

        {{-- Persons --}}
        <label for="persons">Aantal personen</label>
        <input type="number" name="persons" id="persons">

        {{-- Total Price --}}
        <div>
            <input type="number" name="price_total" id="price-total" value="110.80" disabled>
        </div>

        {{-- Pay select --}}

        <div>
            <button type="submit">Reserveren</button>
        </div>
    </form>

</x-app-layout>

<script>
    const bookedDates = @json($bookedDates);
</script>


