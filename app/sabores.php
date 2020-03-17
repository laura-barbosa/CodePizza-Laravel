<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sabores extends Model
{
    protected $table = 'sabores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sabor', 'ingredientes', 'preco'//, 'imagem'
    ];
}
