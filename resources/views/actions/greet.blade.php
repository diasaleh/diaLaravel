

@extends('layouts.master')


@section('content')
    <div>
        @if($name == null)
            <h1>I greet Dia!</h1>

        @else
            <h1>I greet {{ $name }}!</h1>
        @endif
        <a href="{{ route('home') }}">home</a>

    </div>

@endsection
