<?php

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá , seja bem vindo ao curso';
// });

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\NossoContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\NossoContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function() {return 'Login'; });

//app
Route::prefix('/app')->group(function() {

    Route::get('/clientes', function() {return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function() {return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function() {return 'Produtos'; })->name('app.produtos');


});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste');


Route::fallback(function(){

    echo 'Não existe essa rota, retorne ' . "<a href=".route('site.index')." >aqui </a>";

});
