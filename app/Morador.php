<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    // indica o nome da tabela
    protected $table="moradores";

    // determina quais campos do formulário devem ser
    // fornecidos
    protected $fillable = [
        'nome',
        'fone_res',
        'fone_cel',
        'apartamento'
    ];
}
