

@extends('layouts.master')


@section('content')
    <div>
        <h1>I greet {{ $name }}!</h1>
        <a href="{{ route('home') }}">home</a>

    </div>

@endsection
