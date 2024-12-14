<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Relatório de Itens</h1>
    <br>
    <p>Total de Itens Cadastrados: {{ $total_itens }}</p>
    <br>
    <h2>Itens cadastrados no banco:</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Cadastro</th>
                <th>Objeto Entregue</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->data_cadastro }}</td>
                    <td>{{ $item->objeto_entregue ? 'Sim' : 'Não' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>