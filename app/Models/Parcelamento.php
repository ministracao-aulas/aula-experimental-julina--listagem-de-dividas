<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelamento extends Model
{
    use HasFactory;

    protected $dates        = [
        'competencia',
    ];

    protected $fillable     = [
        'debito_id',
        'parcela',
        'total_de_parcelas',
        'valor',
        'competencia',
    ];

    public function debito()
    {
        return $this->belongsTo(Debito::class, 'debito_id', 'id');
    }
}
