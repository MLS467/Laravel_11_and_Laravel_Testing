<div>

    <form action={{ route('add') }} method="post">
        @csrf
        <div>
            <label for="Name">Name : </label>
            <input type="text" name="name" id="name">
        </div>
        <br><br><br>
        <div>
            <label for="Email">Email : </label>
            <input type="text" name="email" id="email">
        </div>
        <br><br><br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>