<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function index(){
        return view('stripe.stripe-checkout');
    }

    public function Payment(Request $request){

        $price = $request->price;
        $stripe_sk = config('stripe.sk');

        $stripe = new \Stripe\StripeClient($stripe_sk);

        $cancel_url = route('stripe.cancelled');
        $success_url = route('stripe.success');

        $checkout = $stripe->checkout->sessions->create([
                'success_url' => $success_url,
                'cancel_url' => $cancel_url,
                'line_items' => [
                    [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => 'Whey Protein'
                        ],
                        'unit_amount' => $price * 100,
                        ],
                    'quantity' => 1
                    ],
                ],
                'mode' => 'payment',
            ]);

            if(isset($checkout->url)){

                return redirect()->away($checkout->url);

            }else{

                return redirect()->away($cancel_url);

            }

    }

    public function Success(){

        echo "<center>><h1>Payment Completed</h1></center>";

    }

    public function Cancel(){

        echo "<center><h1>Payment Cancelled</h1></center>";

    }

}

