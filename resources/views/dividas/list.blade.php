@extends('layouts.bs5')


@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Valor</th>
            <th scope="col">Fim da dívida</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($debitos as $debito)
            <tr>
                <th scope="row">{{ $debito->id }}</th>
                <td>{{ $debito->client_id }}</td>
                <td>{{ $debito->valor_da_divida }}</td>
                <td>{{ $debito->fim_da_divida->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('debitos.parcelas', $debito->id) }}" class="btn btn-sm btn-info">Listar parcelas</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
