@extends('templates.base')

@section('title', 'Homepage')

@section('content')
<div class="container space">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="card-c col-2">
            <div class="card-comic">
                <a href="{{ route('product', ['id' => $loop->iteration])}}">
                    <div class="card-comic-content">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <div class="series">{{$comic['series']}}</div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- @dump($comics) -->
@endsection