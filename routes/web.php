<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('produtos');
});

Route::prefix('produtos')->group( function(){
        Route::get('/', [ProdutoController::class, 'index']);

        // Rotas de CRUD
        Route::get('/create', [ProdutoController::class, 'create']);
        Route::post('/', [ProdutoController::class, 'store']);
    }
);
