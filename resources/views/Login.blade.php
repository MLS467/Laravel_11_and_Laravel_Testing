@extends('layout.common')


@section('content')
<div class="login-container">
    <h2>Login</h2>

    @if(session('success'))
    <x-message class="success" msg="{{ session('success') }}" />
    @endif


    <form method="POST" action={{ route('auth') }}>
        @csrf
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required />
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required />
        </div>

        <button type="submit" class="login-btn">Entrar</button>
    </form>
    <div class="footer">
        <p>Não tem conta? <a href="/register">Cadastre-se</a></p>
    </div>
</div>
@endsection

@section('style')
@extends('layout.profile_style')
@endsection