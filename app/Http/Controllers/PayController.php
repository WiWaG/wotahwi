<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Mollie\Laravel\Facades\Mollie;

class PayController extends Controller
{

    public static function preparePayment(Reservation $reservation)
        {   
            //  dd($reservation['price_total']);


            $payment = Mollie::api()->payments->create([
                "amount" => 
                
                [
                    "currency" => "EUR",
                    // "value" => Reservation::get('price_total'),
                    "value" => $reservation['price_total'],
                    // "value" =>"10.00"
                ],
                "description" => "blabla",
                "redirectUrl" => 'http://404fd2ab13be.ngrok.io/reservations/create/',
                "webhookUrl" => route('webhooks.mollie'),
                "metadata" => [
                    "order_id" => "12345",
                ],
            ]);

            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);
        }

    
}
