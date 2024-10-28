<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'texto', // ou o nome do campo que armazena o texto do comentário
        'item_id', // se você tem um relacionamento com um item
        'user_id', // se você está armazenando a referência do usuário que fez o comentário
    ];

    // Definindo o relacionamento com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}