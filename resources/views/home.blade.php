@extends('templates.base')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="card-comic col-2">
            <div class="card-comic-content">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <div class="title">{{$comic['series']}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- @dump($comics) -->

@endsection