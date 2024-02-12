<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NossoContatoController extends Controller
{
    public function Contato() {

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return view('site.contato');
        
    }
}
