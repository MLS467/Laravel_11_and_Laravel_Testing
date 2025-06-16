@extends('common.common')

@section('content')
<div>
    <h1>Student Page</h1>

    @for ($i = 0; $i <= 10; $i++) <span>{{ $i }}</span> @endfor
        <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
@endsection