<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable =[
        'nome', 'email', 'cpf', 'data_nascimento', 'telefone', 'curso'
    ];
}
