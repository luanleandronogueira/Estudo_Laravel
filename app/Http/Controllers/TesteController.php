<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //echo "A Soma de $p1 + $p2 é: ".($p1+$p2);

        //return view('teste', ['x' => $p1, 'y' => $p2]); // array associativo

        //return view('teste', compact('p1', 'p2')); // metodo compact

        return view('teste')->with('p1', $p1)->with('p2', $p2); // metodo with()
    }
}
