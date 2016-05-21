

@extends('layouts.master')


@section('content')
    <div>
        <h1>I {{$action}} {{$name}}!</h1>
        <a href="{{ route('home') }}"></a>
    </div>

@endsection
