<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Item $item)
    {
        //
        $request->validate([
            'texto' => 'required|string|max:255',
        ]);
        
        $comentario = Comentario::create([
            'texto' => $request->texto,
            'user_id' => Auth::user()->id,
            'item_id' => $item->id,
        ]);
        
        $comentario->save();

        return redirect('/item/' . $item->id . '/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {   
        // Encontra o item pelo ID do comentário
        $item = Item::where('id' , $comentario->item_id)->first();

        if (!$item) {
            return redirect()->back()->with('error', 'Item não encontrado.');
        }

        $comentario->delete(); // Exclui o comentário

        return redirect('/item/' . $item->id . '/show'); // Redireciona para a página do item
    }
}
