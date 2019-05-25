@extends('welcome')

@section('content')
    <form action="/store" method="post">
        @csrf
        <input type="text" name="title" placeholder="enter task title">
        <input type="text" name="description" placeholder="enter task description">
        <br>
        <input type="submit" name="submit">
    </form>
@endsection