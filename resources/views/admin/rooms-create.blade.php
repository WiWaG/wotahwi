@extends('layouts.dashboard')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Admin Dashboard') }}
</h2>
@endsection

@section('content')

<div class="container bg-yellow-300 p-2 lg:p-4">

    <!-- Create Form  -->
    <div class="rounded bg-white shadow-xl p-5 lg:p-20 mx-auto text-gray-800">

        <form action=" {{ route('admin.rooms.store') }} " method="POST">
            @csrf
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Kamer toevoegen</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-name">
                    Naam van de kamer:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="room-name" type="text" placeholder="Naam van de kamer:" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-price-night">
                    Prijs per nacht
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="price_night" id="room-price-night" type="number" placeholder="0" min="0" required>
            </div>

            <div class="mb-4">
                <div id="add-image-container">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image-name0">Geef een naam aan de foto (optioneel)</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="images[0][name]" id="image-name0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image-file-path0">URL van de foto</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="images[0][file_path]" id="image-file-path0">
                </div>
                <button class="my-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button" onclick="addImage()">Nog een foto toevoegen</button>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="room-description">
                    Omschrijving van de kamer:
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="room-description" rows="10" placeholder="Omschrijving van de kamer" required></textarea>
            </div>

            <div class="flex items-center justify-between">
                <button id="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    opslaan
                </button>
            </div>

        </form>

    </div>




    <!-- <form action=" {{ route('admin.rooms.store') }} " method="POST">
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
</form> -->
    @endsection

    @section('scripts')
    <script>
        let count = 1;

        function addImage() {
            const imgContainer = document.querySelector('#add-image-container');

            imgContainer.insertAdjacentHTML(
                'beforeend',
                `<label for="image-name${count}">Geef een naam aan de foto (optioneel)</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
     type="text" name="images[${count}][name]" id="image-name${count}" >
    <label class="block text-gray-700 text-sm font-bold mb-2" for="image-file-path${count}">URL van de foto</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
     type="text" name="images[${count}][file_path]" id="image-file-path${count}">`
            );
            count++
        }
    </script>


    @endsection
