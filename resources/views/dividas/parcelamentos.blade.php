@extends('layouts.bs5')

<div class="w-100">
    <a href="{{ route('debitos.index') }}" class="btn btn-sm btn-info">Listar dívidas</a>
</div>

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Débito</th>
            <th scope="col">Valor</th>
            <th scope="col">Parcela</th>
            <th scope="col">Competência</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($parcelas as $parcela)
            <tr>
                <th scope="row">{{ $parcela->id }}</th>
                <td>{{ $parcela->debito->client_id }}</td>
                <td>{{ $parcela->debito_id }}</td>
                <td>{{ $parcela->valor }}</td>
                <td>{{ $parcela->parcela }} de {{ $parcela->total_de_parcelas }}</td>
                <td>{{ $parcela->competencia->format('m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
