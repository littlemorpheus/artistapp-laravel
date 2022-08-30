@extends('layouts.app')

@section('content')
    <h1>
        The result of {{ $x }} plus {{ $y }} = {{ $result }}
    </h1>

    <form action="{{ route('numbers.add2') }}">
        <input type="number" name="formX">
        <input type="number" name="formY">
        <button>Submit</button>
    </form>
    
    @for($i = 0, $j = 0; $i < 10; $i++, $j++)
        <p>
            <a href="{{ route('numbers.add', [$i, $j]) }}">{{ $i }} + {{ $j }}</a>
        </p>
    @endfor
@endsection