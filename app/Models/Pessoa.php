<?php

namespace App\Models;

class Pessoa extends Model
{
    protected $fillable = ['nome', 'email', 'cpf', 'endereco', 'telefone'];
}
