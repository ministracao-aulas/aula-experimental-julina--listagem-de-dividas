<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debito extends Model
{
    use HasFactory;

    protected $dates        = [
        'fim_da_divida',
    ];

    protected $fillable     = [
        'client_id',
        'valor_da_divida',
        'fim_da_divida',
    ];

}
