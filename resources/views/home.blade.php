@extends('layouts.master')


@section('content')
<div>
    <h1>hello!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor error incidunt minus officia quis quisquam veritatis. Culpa dolores, ex facere hic iste laborum magnam nesciunt porro quisquam quo, repellat ut.
    </p>
    <div class="acti">
        <ul>
            <li><a href="{{ Route('greet') }}">greet</a></li>
            <li><a href="{{ Route('hug') }}">hug</a></li>
            <li><a href="{{ Route('kiss') }}">kiss</a></li>
        </ul>
    </div>
    <br>
</div>

@endsection
