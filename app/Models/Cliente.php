<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes'; // nome da tabela

    protected $primaryKey = 'id'; // chave primária

    public $timestamps = true; // se tiver created_at e updated_at

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];
}