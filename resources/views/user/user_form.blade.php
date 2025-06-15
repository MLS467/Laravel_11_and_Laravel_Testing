@extends("common.common")
@section('content')

<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->



    <h1>Formulário de Usuário</h1>

    <form action={{route("user_store")  }} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class={{$errors->first("name")?'input_error':'form-control'}} id="name" name="name"
                value='{{ old('name') }}'>
            <span>
                @error('name')
                <x-message-banner msg='{{ $message }}' class=" error" />
                @enderror
            </span>
        </div>
        <div class=" form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value='{{ old('email') }}'>
            @error(' email')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class=" form-group">
            <label for="password">Password</label>
            <input type="password" class={{$errors->first("password")?'input_error':'form-control'  }} id="password"
                name="password" placeholder="Leave blank to keep current password" value='{{ old('password') }}'>
            @error(' password')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class=" form-group">
            <label for="password_confirmation">password_confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Leave blank to keep current password" value='{{ old('password_confirmation') }}'>
            @error(' password_confirmation')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <h4>Habilidades do usuário.</h4>
            <div>
                <input type="checkbox" name="php" value="1" id="php">
                <label for="php">PHP</label>
            </div>
            <div>
                <input type="checkbox" name="js" value="1" id="javascript">
                <label for="javascript">Javascript</label>
            </div>
            <br><br>
        </div>

        <div>
            <h4>Gênero do usuário.</h4>
            <div>
                <input type="radio" name="genero" value="feminino" id="feminino" checked>
                <label for="feminino">Feminino</label>
            </div>
            <br>
            <div>
                <input type="radio" name="genero" value="masculino" id="masculino">
                <label for="masculino">Masculino</label>
            </div>
            <br><br>
        </div>

        <div>
            <h4>Idade do usuário</h4>
            <input type="range" min="0" max="100" value="50" class="form-range" id="customRange1" name="idade">
            <label for="customRange1">Valor do range: <span id="rangeValue">50</span></label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

    <script>
    const rangeInput = document.getElementById('customRange1');
    const rangeValue = document.getElementById('rangeValue');

    // Atualiza ao carregar a página
    rangeValue.textContent = rangeInput.value;

    // Atualiza em tempo real ao mover o controle
    rangeInput.addEventListener('input', () => {
        rangeValue.textContent = rangeInput.value;
    });
    </script>
</div>
@endsection