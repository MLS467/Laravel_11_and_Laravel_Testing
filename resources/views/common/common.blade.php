<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .form-actions {
        margin-top: 1rem;
        text-align: right;
        /* alinha o botão à direita */
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 0.6rem 1.2rem;
        font-size: 1rem;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.2s, box-shadow 0.2s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .btn-primary:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.4);
    }


    .form-group {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
        max-width: 400px;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .form-group input {
        padding: 0.6rem 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-group input:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
    }
    </style>

    <title>Comum</title>
</head>

<body>
    @include("common.header")
    @yield('content')
</body>

</html>