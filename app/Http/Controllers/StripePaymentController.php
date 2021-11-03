<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class StripePaymentController extends Controller
{
    private $paymentMethod = [
        'STRIPE',
        'PAYPAL'
    ];
    public function __construct() {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
    }
    public function getCheckout(Request $request) {
        $pageTitle = 'Demo Stripe';

        return view('landing.booking.payment', compact('pageTitle'));
    }
    public function postCheckout(Request $request) {
        $validated = $request->validate([
            'price' => ['required']
        ]);
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => $validated['price'] * 100,
                        'product_data' => [
                            'name' => 'Stubborn Attachments',
                        ],
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel'),
        ]);
        return redirect($session->url, 303);
    }
    public function getSuccess(Request $request) {
        $session = \Stripe\Checkout\Session::retrieve($request->session_id);
        $transaction = Transaction::create([
            'payment_method' => $this->paymentMethod[0],
            'transaction_id' => $session->payment_intent,
            'amount' => $session->amount_total / 100,
            'currency' => $session->currency,
            'status' => 1
        ]);
    }
    public function getCancel(Request $request) {

    }
}
