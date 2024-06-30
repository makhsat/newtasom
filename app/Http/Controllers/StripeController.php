<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StripeController extends Controller
{
    public function __construct()
    {
        if(config('stripe.STRIPE_MODE') === 'live') {
            Stripe::setApiKey(config('stripe.STRIPE_LIVE_SECRET_KEY'));
        } else {
            Stripe::setApiKey(config('stripe.STRIPE_TEST_SECRET_KEY'));
        }
    }
    public function checkout(Request $request)
    {
        $request->validate([
        //    'name' => 'required|string|min:5|max:100',
            'pieces' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:50',
        ]);

        // Retrieve validated input
        $name = $request->input('name');
        $pieces = $request->input('pieces');
        $totalPrice = $pieces * 50; // Ensure total price matches pieces * 50

        try {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Brick Purchase',
                    ],
                    'unit_amount' => 50 * 100, // Price in cents
                ],
                'quantity' => $pieces,
            ];
            $customFiled[] = [
                    [
                        'key' => 'public_name',
                        'label' => [
                            'type' => 'custom',
                            'custom' => 'Name On Display Board',
                        ],
                        'type' => 'text',
                    ],
            ];

            $session = Session::create([
                'line_items' => $lineItems,
                'custom_fields' => $customFiled,
                'mode' => 'payment',
                'success_url' => route('stripe.checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('stripe.checkout.cancel', [], true),
            ]);

            return redirect($session->url);
        } catch (\Exception $e) {
            $notification = array(
                'message' => "Error: " . $e->getMessage(),
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function success(Request $request)
    {
        $sessionId = $request->query('session_id');

        try {
            $session = Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException('Session not found.');
            }

            // You can save the payment details in your database if needed here

            $notification = array(
                'message' => "Payment was successful.",
                'alert-type' => 'success'
            );
            return redirect()->route('home')->with($notification);

        } catch (\Exception $e) {
            $notification = array(
                'message' => "Error: " . $e->getMessage(),
                'alert-type' => 'danger'
            );
            return redirect()->route('home')->with($notification);
        }
    }

    public function cancel(Request $request)
    {
        $notification = array(
            'message' => 'You have canceled the transaction.',
            'alert-type' => 'danger'
        );

        return redirect()->route('home')->with($notification);
    }

}
