<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NossoContatoController extends Controller
{
    public function Contato() {

<<<<<<< HEAD
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return view('site.contato');
=======
        return view('contato');
>>>>>>> 5f1d4842bdf3d6823de01663728d078be5fbd191
        
    }
}
