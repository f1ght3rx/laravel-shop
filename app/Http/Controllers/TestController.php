<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 11;
        $str = 'Hello';
        $mas = [5, 6, 7, 9, 1324];
        return view('second', compact('num', 'str', 'mas'));
    }
}
