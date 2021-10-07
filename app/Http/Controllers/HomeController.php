<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function submitDonate(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $request->program_name,
                    ],
                    'unit_amount' => (int)((int)$request->amount * 100),
                ],
                'quantity' => 1,
            ]],
            'payment_method_types' => [
                'card',
            ],
            'mode' => 'payment',
            'success_url' => URL('/checkout/success'),
            'cancel_url' => URL('/checkout/cancel'),
        ]);
        return redirect($checkout_session->url);
    }
}
