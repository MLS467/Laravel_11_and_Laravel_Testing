@extends("common.common")
@section('content')

<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <form action={{route("user_store")  }} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" "
                required>
        </div>
        <div class=" form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" "
                required>
        </div>
        <div class=" form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Leave blank to keep current password">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection