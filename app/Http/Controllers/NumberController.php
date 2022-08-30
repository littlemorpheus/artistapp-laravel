<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function add(Request $request, $x, $y) {
        $result = $x + $y;
        // return view('numbers', [
        //     'result' => $result,
        //     'x' => $x,
        //     'y' => $y
        // ]);
        return view('numbers', compact('result', 'x', 'y'));
    }

    public function add2(Request $request) {
        $x = $request->formX;
        $y = $request->formY;

        $result = $x + $y;
        // return view('numbers', [
        //     'result' => $result,
        //     'x' => $x,
        //     'y' => $y
        // ]);
        return view('numbers', compact('result', 'x', 'y'));
    }
}
