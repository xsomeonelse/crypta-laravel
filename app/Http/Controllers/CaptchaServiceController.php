<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    // public function index()
    // {
    //     return view('contact');

    // }

    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required|email',
            // 'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
        return back()->with('captchaVal', '<button form="contactForm" id="buttonCaptForm">Enviar</button>');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}