@extends('welcome')

@section('content')
    <header class="header-description">
        <ul>
            <li><h2>{{$data['title']}}</h2></li>
            <li><div class="description">{{$data['description']}}</div></li>
        </ul>
    </header>
@endsection