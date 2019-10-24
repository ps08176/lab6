<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function calculate(Request $request){
        $first = $request->post('firstoperant');
        $second = $request->post('secondoperant');
        $result = 'sum: '.($first + $second);

        return view('index', ['result'=>$result]);
    }
}
