<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pay(Request $request)
    {
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        return $request->all();
    }

    public function approval()
    {
        # code...
    }

    public function cancelled()
    {
        # code...
    }
}
