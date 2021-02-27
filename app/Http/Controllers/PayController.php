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
                    "value" => $reservation['price_total'],
                ],
                "description" => "blabla",
                "redirectUrl" => 'https://a0f99f6fcada.ngrok.io/reservations/show/',
                "webhookUrl" => route('webhooks.mollie'),
                "metadata" => [
                    "order_id" => "12345",
                ],
            ]);

            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);
        }

    
}
