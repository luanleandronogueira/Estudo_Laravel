<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function SobreNos(){
        // Altere o retorno de acordo com a sua necessidade
        return view('site.sobrenos');
    }
}
