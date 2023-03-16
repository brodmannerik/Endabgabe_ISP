<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripeController extends Controller
{
    //
    public function index(): Factory|View|Application
    {
        return view('components/payment');
    }

    /**
     * @throws ApiErrorException
     */
    public function checkout(): \Illuminate\Http\RedirectResponse
    {
        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'success_url' => route('success'),
            'mode' => 'subscription',
            'line_items' => [
               [
                   'price' => 'price_1Mc8FQHRtzLmwTPHCQSTwn2c',
                   'quantity' => 1,
                   ],
               ],
            ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request): \Illuminate\Routing\Redirector|Application|\Illuminate\Http\RedirectResponse
    {
        $user = User::find($request->user()->id);
        $user->update(array('paid_member' => true));

        $formFields['user_id'] = $request->user()->id;
        $formFields['name'] = $request->user()->name;
        $formFields['stripe_id'] = $request->user()->id;
        $formFields['stripe_status'] = "successful";
        $formFields['stripe_price'] = "€10.00EUR";

        Subscription::create($formFields);

        return redirect('/')->with('success', 'User created and logged in');
    }

    public function cancel(): Factory|View|Application
    {
        return view('/');
    }
}
