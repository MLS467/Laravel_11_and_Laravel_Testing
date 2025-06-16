@extends("common.common")
@section("content")
<div>
    <h3>{{ URL::current() }}</h3>
    <h3>{{ url()->full() }}</h3>
    @foreach ($valores as $val )
    <h1>{{ $val }}</h1>
    @endforeach

    <h2>{{ rand(1,100) }}</h2>
    <!-- <x-message-banner msg="Página de teste" class="success" /> 
    
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <a href={{ url()->to('about',['batata']) }}>about --> treta</a>
</div>
@endsection