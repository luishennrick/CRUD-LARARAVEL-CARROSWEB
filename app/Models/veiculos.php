<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculos extends Model
{
    use HasFactory;


    protected $fillable = [
        'marca',
        'modelo',
        'renavam',
        'placa',
        'ano',
        'proprietario',
        'email_proprietario',
    ];
}
