<?php
// Imports padroes
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Imports de Middleware
use App\Http\Middleware\AdmMiddleware;
// Imports dos Controllers
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ComentarioController;
// Imports dos Models
use App\Models\Item;
//Relatório
use Barryvdh\DomPDF\Facade\Pdf;

// Rotas de Laouts somente para testes
Route::view('/app', 'layouts.app');
Route::view('/forms', 'layouts.forms');

// Rotas Basicas
Route::view('/', 'welcome')->middleware('guest');

Route::get('/dashboard', function() {
    $items = Item::all();
    return view('dashboard', compact('items'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas Login/Registro de Usuarios 
Route::prefix('user')->middleware('guest')->controller(RegisteredUserController::class)->group(function () {
    Route::view('/register', 'profile.auth.register');
    Route::post('/register', 'store');
});

Route::prefix('user')->middleware('guest')->controller(AuthenticatedSessionController::class)->group(function () { 
    Route::view('/login', 'profile.auth.login');
    Route::post('/login', 'store');
});

Route::post('/user/logout', function(Request $request) {
    $user = $request->user();

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->middleware(['auth', 'verified']);

// Rotas para Items
Route::prefix('item')->middleware(['auth', 'verified'])->controller(ItemController::class)->group(function () { 
    Route::get('/{item}/show', 'show');
    Route::get('/create', 'create')->middleware(AdmMiddleware::class);
    Route::post('/create', 'store')->middleware(AdmMiddleware::class);
    Route::delete('/{item}/delete', 'destroy')->middleware(AdmMiddleware::class);
    Route::get('/{item}/edit', 'edit')->middleware(AdmMiddleware::class);
    Route::put('/{item}/update', 'update')->middleware(AdmMiddleware::class);
    Route::post('/{item}/coment', [ComentarioController::class, 'store']);
    Route::delete('/{comentario}/coment/delete', [ComentarioController::class, 'destroy']);
});

// Rota para gerar pdf
Route::get('/relatorio', function () {
    $items = Item::all();

    // Calcular informações
    $total_itens = $items->count();
    $itens_perdidos = $items->where('objeto_entregue', false)->count();

    // Gerar o PDF
    $pdf = Pdf::loadView('relatorio', compact(
        'items',
        'total_itens',
        'itens_perdidos'
    ));

    return $pdf->stream('Relatorio.pdf');// Exibir no navegador
});