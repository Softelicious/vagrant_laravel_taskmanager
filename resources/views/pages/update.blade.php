@extends('welcome')

@section('content')
    <form action="/update_task" method="post">
        @csrf
        <input type="text" name="title" value="{{$data->title}}">
        <input type="text" name="description" value="{{$data->description}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <br>
        <input type="submit" name="submit">
    </form>
@endsection