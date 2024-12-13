<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
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
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000', // Certifique-se de que este campo está no request
            'data_cadastro' => 'required|date',
            'img' => 'required|url',
        ]);
        
        $item = Item::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao, // Certifique-se de que este campo está presente
            'data_cadastro' => $request->data_cadastro,
            'img' => $request->img,
            'user_id' => Auth::user()->id
        ]);
        
        $item->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
        $comentarios = Comentario::where('item_id', $item->id)->get();
        
        return view('items.show', compact('item', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Item $item)
    // {
    //     $request->validate([
    //         'nome' => 'required|string|max:255',
    //         'descricao' => 'required|string|max:1000', // Certifique-se de que este campo está no request
    //         'data_cadastro' => 'required|date',
    //         'img' => 'required|url',
    //     ]);

    //     // Atualiza o item
    //     $item->nome = $request->nome;
    //     $item->descricao = $request->descricao;
    //     $item->data_cadastro = $request->data_cadastro;
    //     $item->img = $request->img;
    //     $item->user_id = Auth::user()->id;

    //     $item->save();

    //     return redirect('/item/' . $item->id . '/show')->alert('sucesso item atualizado com sucesso!');
    // }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'data_cadastro' => 'required|date',
            'img' => 'required|url',
        ]);

        // Atualiza o item
        $item->nome = $request->nome;
        $item->descricao = $request->descricao;
        $item->data_cadastro = $request->data_cadastro;
        $item->img = $request->img;
        $item->user_id = Auth::user()->id;

        $item->save();

        // Simples redirecionamento sem mensagem
        // return redirect('/item/' . $item->id . '/dashboard');
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/dashboard');
    }
}
