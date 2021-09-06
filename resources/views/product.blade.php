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
            <div class="advert">ADVERTISEMENT</div>
            <img src="/img/imageadv.jpg" alt="">
            <!-- <img src="{{$comics['thumb']}}" alt="{{$comics['series']}}"> -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-gray">
        <div class="row">
            <div class="col-12">
                <div class="container space">
                    <div class="row">
                        <div class="col-6">
                            <div class="container-gray-font">Talent</div>
                            <div class="row">
                                <div class="col-4 gray-font">Art by:</div>
                                <div class="col-8">
                                    @foreach ($comics['artists'] as $artist)
                                    <div class="textLinea-down">{{$artist}}</div>
                                    @if ($loop->last)
                                    <div class="textLinea-down">.</div>
                                    @else
                                    <div class="textLinea-down">,</div>
                                    @endif
                                    @endforeach
                                    <!--  prova codice @php
                                echo "
                                <pre>";
                                print_r($comics['artists']);
                                echo "</pre>";
                                @endphp -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 gray-font">Written By:</div>
                                <div class="col-8">
                                    @foreach ($comics['writers'] as $writer)
                                    <div class="textLinea-down">{{$writer}}</div>
                                    @if ($loop->last)
                                    <div class="textLinea-down">.</div>
                                    @else
                                    <div class="textLinea-down">,</div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="container-gray-font">Specs</div>
                            <div class="row">
                                <div class="col-4 gray-font">Series:</div>
                                <div class="col-8 textLinea-up">{{$comics['series']}}</div>
                            </div>
                            <div class="row">
                                <div class="col-4 gray-font">U.S. Price:</div>
                                <div class="col-8">{{$comics['price']}}</div>
                            </div>
                            <div class="row">
                                <div class="col-4 gray-font">On Sale Date:</div>
                                <div class="col-8">{{$comics['sale_date']}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection