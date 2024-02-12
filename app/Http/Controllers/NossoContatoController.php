<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NossoContatoController extends Controller
{
    public function Contato() {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        // Altere o retorno de acordo com a sua necessidade
        return view('site.contato');
    }
}
