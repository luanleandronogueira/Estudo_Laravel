<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        // Altere o retorno de acordo com a sua necessidade
        return view('site.principal');
    }
}
