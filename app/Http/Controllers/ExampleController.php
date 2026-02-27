<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {

        return view('profile.exampleShow');
    }

    public function process(Request $request)
    {
        $data = [
            'cislo' => $request->input('cislo'),
        ];

        // fibonacciho postupnost
        $a = [];
        $prve = $data['cislo'];
        $druhe = $data['cislo']*2;

        $a[0] = $prve;
        $a[1] = $druhe;

        for($i = 2; $i < 10; $i++) {
            $a[$i] = $a[$i-1] + $a[$i-2];
        }

        return view('profile.exampleProcess', ['data' => $a]);
    }
}
