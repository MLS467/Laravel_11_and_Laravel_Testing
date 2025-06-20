@extends('layout.common')

@section('content')

<h1>Olá, seja bem vindo {{ $result }}!</h1>

<a href={{ route('logout') }}>Logout</a>
@endsection