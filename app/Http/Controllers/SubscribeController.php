<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function store()
    {
        request()->validate([
            'email'=>'required|email'
        ]);

        Mail::to(request('email'))->send(new Subscribe('Nieuwsbrief'));
        return redirect('/welcome')
        ->with('message', 'Email sent');
    }
}
