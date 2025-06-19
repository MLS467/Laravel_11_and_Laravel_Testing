<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Formulário de Usuário</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>

    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <input type="hidden" name="id">

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="password">
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>