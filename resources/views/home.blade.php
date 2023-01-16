@extends('layouts.app')

@section('main')
    <div>
        @foreach ( $all_movies as $item )
            <h2>{{$item['title']}}</h2>
        @endforeach
    </div>
@endsection