<?php

namespace App\Http\Controllers;

use App\Notifications\SendTwoFactorCode;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
        return view('auth.twoFactor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'integer|required',
        ]);

        $user = auth()->user();

        if($request->input('two_factor_code') == $user->two_factor_code)
        {
            $user->resetTwoFactorCode;

            return redirect()->route('admin.home');
        }

        return redirect()->back()
            ->withErrors(['two_factor_code' =>
                'le code que vous essayé dentrer ne correspond pas à nos enregistrements']);
    }

    public function resend()
    {
        $user = auth()->user();
        $user->generateTwoFactorCode;
        $user->notify(new SendTwoFactorCode());

        return redirect()->back()->withMessage('le code a été envoyé à nouveau');
    }
}
