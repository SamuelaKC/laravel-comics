@extends('templates.base')

@section('title', 'Product')

@section('content')
<div class="container space">
    <div class="row">
        <div class="col-10">
            <div class="title">{{$comics['title']}}</div>
            <div class="container-prize">
                <div class="row">
                    <div class="col-8">
                        <div class="prize">U.S. Price: <span class="prize-color">{{$comics['price']}}</span>
                        </div>
                    </div>
                    <div class="col-2">AVAILABLE</div>
                    <div class="col-2">Check Availability </div>
                </div>
            </div>
            <div class="description">{{$comics['description']}}</div>
        </div>
        <div class="col-2">
            <img src="{{$comics['thumb']}}" alt="{{$comics['series']}}">
        </div>
    </div>
    <div class="row">
        <div class="container space">
            <div class="container-gray">
                <div class="row">
                    <div class="col-6">
                        <div class="container-gray-font">Talent</div>
                        <div class="row">
                            <div class="col-4">Art by:</div>
                            <div class="col-8">
                                <ul>
                                    @foreach ($comics['artists'] as $artist)
                                    <li>{{$artist}}</li>
                                    @endforeach
                                    <!--  prova codice @php
                                echo "
                                <pre>";
                                print_r($comics['artists']);
                                echo "</pre>";
                                @endphp -->
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Written By:</div>
                            <div class="col-8">
                                <ul>
                                    @foreach ($comics['writers'] as $writer)
                                    <li>{{$writer}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="container-gray-font">Specs</div>
                        <div class="row">
                            <div class="col-4">Series:</div>
                            <div class="col-8">{{$comics['series']}}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">U.S. Price:</div>
                            <div class="col-8">{{$comics['price']}}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">On Sale Date:</div>
                            <div class="col-8">{{$comics['sale_date']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection