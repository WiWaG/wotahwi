<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MollieWebhookController extends Controller
{

     /**
     * After the customer has completed the transaction,
     * you can fetch, check and process the payment.
     * This logic typically goes into the controller handling the inbound webhook request.
     * See the webhook docs in /docs and on mollie.com for more information.
     */
    
    public function handleWebhookNotification(Request $request) {
        $paymentId = $request->input('id');
        $payment = Mollie::api()->payments->get($paymentId);

        if ($payment->isPaid())
        {
            echo 'Payment received.';
            // Do your thing ...
        }
    }
}
