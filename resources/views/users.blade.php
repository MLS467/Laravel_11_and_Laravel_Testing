@extends('layout.common')

@section('content')
<div class="container">
    <h2>Lista de Usuários da API</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($content_users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email  }}</td>
                <td>{{ $user->address->city }}</td>
                <td>{{ $user->company->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('styles')
<style>
body {
    background-color: #121212;
    color: #e0e0e0;
    padding: 0 40px;
    font-family: Arial, sans-serif;
}

.container {
    margin: 40px auto;
    padding: 20px;
    background-color: #1e1e1e;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
}

h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #bfa17d;
    /* marrom claro */
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #2a2a2a;
    border: 1px solid #444;
}

thead {
    background-color: #1c1c1c;
}

th,
td {
    padding: 12px 16px;
    border: 1px solid #444;
    text-align: left;
}

th {
    color: #bfa17d;
    font-weight: bold;
}

tr:hover {
    background-color: #333;
}
</style>
@endsection