<div>
    @includeIf('common.header')

    @foreach ($valores as $val )
    <h1>{{ $val }}</h1>
    @endforeach

    <h2>{{ rand(1,100) }}</h2>

    <x-message-banner msg="Página de teste" class="success" />
    <x-message-banner msg="Página de teste" class="error" />
    <x-message-banner msg="Página de teste" class="warning" />
    <x-message-banner msg="Página de teste" class="info" />
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>