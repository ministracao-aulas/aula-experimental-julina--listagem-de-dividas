<?php

namespace App\Http\Controllers;

use App\Models\Debito;
use App\Models\Parcelamento;
use Illuminate\Http\Request;

class DebitoController extends Controller
{
    public function index(Request $request)
    {
        $debitos = Debito::paginate(30);
        return view('dividas.list', [
            'debitos' => $debitos,
        ]);
    }

    public function listParcelamentoById($debito_id, int $limit = 30)
    {
        $parcelas = Parcelamento::with('debito')->where('debito_id', $debito_id)->paginate($limit);

        if(!$parcelas)
            return 'Divida não encontrada';

        return view('dividas.parcelamentos', [
            'parcelas' => $parcelas,
        ]);
    }
}
