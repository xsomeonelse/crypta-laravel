<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormController extends Controller
{
    // public function store()
    // {
    // 	request()->validate([
    // 		'name' => [
    // 			'required',
    // 			'regex:/^[\pL\s\-]+$/u'
    // 		],
    // 		'email' => 'required|email'
    // 	], [
    // 		'name.required' => 'Es necesario un nombre',
    // 	]);

    // 	return back()->with('status', 'Enviado');
    // }
    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'regex:/^[\pL\s\-]+$/u'
            ],
            'email' => 'required|email',
            // 'username' => 'required',
            'captcha' => [
                'required',
                'captcha',
                'regex:/^[\pL\s\-1-9]+$/u'
            ]
        ], [
            'name.required' => 'Es necesario un nombre',
            'captcha.required' => 'Queremos saber que no eres un robot',
            'captcha.captcha' => 'Captcha invalido',
        ]);
        return back()->with('status', 'Enviado');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
