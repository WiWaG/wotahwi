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

    {{-- Datapicker --}}
    <div>
        <label for="start-date">Begin datum</label>
        <input type="date" name="start_date" id="start-date" required>

        <label for="end-date">Eind datum</label>
        <input type="date" name="end_date" id="end-date" required>
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
