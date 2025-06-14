<div>
    @includeIf('common.header')

    @foreach ($valores as $val )
    <h1>{{ $val }}</h1>
    @endforeach

    <h2>{{ rand(1,100) }}</h2>


    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>