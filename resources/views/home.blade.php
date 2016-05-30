@extends('layouts.master')


@section('content')
<div>
    <h1>hello!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor error incidunt minus officia quis quisquam veritatis. Culpa dolores, ex facere hic iste laborum magnam nesciunt porro quisquam quo, repellat ut.
    </p>
    <div class="acti">
        <ul>
            @foreach($actions as $action)
                <li><a href="{{ route('niceaction',['action'=>lcfirst($action->name)]) }}">{{$action->name}}</a></li>
            @endforeach

        </ul>
    </div>

</div>
<br>

@if(count($errors) > 0)
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('add_action') }}" method="post">
    <label for="name">name:</label>
    <input type="text" name="name" id="name">
    <label for="niceness">niceness:</label>

    <input type="text" name="niceness" id="niceness">
    <button type="submit">Do a nice action!</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

    <br>
    <br>
    <br>
    <ul>
        @foreach($logged_actions as $logged_action)
            <li>
                {{ $logged_action->nice_action->name }}
                @foreach($logged_action->nice_action->categories as $category)
                    {{ $category->name }}

                @endforeach
            </li>

        @endforeach
    </ul>
@endsection
