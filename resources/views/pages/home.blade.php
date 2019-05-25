@extends('welcome')

@section('content')
    <ul id="myID">
        @foreach ($data as $item)

                <li class="checked{{$item->isComplete}}">
                    <a href='{!! url('/done/'.$item->id); !!}'> <div>{{ $item->title }}</div> </a>
                    <a href='{!! url('/delete/'.$item->id); !!}'> <button><i>X</i></button> </a>
                    <a href='{!! url('/update/'.$item->id); !!}'> <button><i>update</i></button> </a>
                    <a style="font-size: 14px" href='{!! url('/description/'.$item->id); !!}'><button><i>show more</i></button></a>
                </li>
        @endforeach
    </ul>
@endsection