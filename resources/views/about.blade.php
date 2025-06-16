@extends("common.common")

@section('content')
<div>
    <h1>Hello {{ $name }}</h1>
    <h2>{{ url()->previous() }}</h2>
    <a href={{ url()->to('home') }}>Home</a>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
@endsection