@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<form action=" {{ route('admin.rooms.store') }} " method="POST">
    @csrf
    <label for="room-name">Naam van de kamer:</label>
    <input name="room[name]" type="text" value="" id="room-name">
    <label for="room-price-night">Prijs per nacht</label>
    <input type="number" name="room[price_night]" id="room-price-night" step="0.01" min="0" value="">
    <label for="room-description">Omschrijving van de kamer:</label>
    <textarea name="room[description]" id="room-description" cols="30" rows="10"></textarea>

    <button type="button" onclick="addImage()">Nog een foto toevoegen</button>
    <div id="add-image-container">
 <label for="image-name0">Geef een naam aan de foto (optioneel)</label>
    <input type="text" name="images[0][name]" id="image-name0" >
    <label for="image-file-path0">URL van de foto</label>
    <input type="text" name="images[0][file_path]" id="image-file-path0">
    </div>


    <input type="submit">
</form>
@endsection

@section('scripts')
<script>
    let count = 1;
    function addImage() {
        const imgContainer = document.querySelector('#add-image-container');

        imgContainer.insertAdjacentHTML(
            'beforeend',
            `<label for="image-name${count}">Geef een naam aan de foto (optioneel)</label>
    <input type="text" name="images[${count}][name]" id="image-name${count}" >
    <label for="image-file-path${count}">URL van de foto</label>
    <input type="text" name="images[${count}][file_path]" id="image-file-path${count}">`
            );
        count++
    }


</script>


@endsection


