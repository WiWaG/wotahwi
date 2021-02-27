@extends('layouts.dashboard')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    @endsection

@section('content')
<!-- Dashboard -->
<div class="min-h-screen bg-yellow-300 flex items-center p-2 lg:p-4">
    <div class="rounded bg-white shadow-xl p-5 lg:p-20 mx-auto text-gray-800">
        <div class="md:flex items-center -mx-5">
            <div class="w-full md:w-1/3 px-4 mb-10 md:mb-0">
                    <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQEDvPi6Lcdu-Q/company-logo_200_200/0?e=2159024400&v=beta&t=3Ij1ICqRitqZccpgAi3zCVfjL34DvNUvEM4KnnwvPDw" alt="">
            </div>
            <div class="w-full md:w-2/3 px-4">
                <div class="mb-10">
                    <h1 class="font-bold uppercase text-2xl mb-5">{{ Auth::user()->name }} <br>{{ Auth::user()->email }}</h1>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro velit non deleniti, quam dolorum deserunt eos nesciunt modi repudiandae. Tempore deserunt praesentium architecto delectus ipsam cupiditate facilis, accusamus totam reprehenderit.</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


