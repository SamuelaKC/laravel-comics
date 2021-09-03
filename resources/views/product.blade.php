@extends('templates.base')

@section('title', 'Product')

@section('content')
Qui metterò i miei prodotti

<div class="container">
    <div class="row">
        <div class="image">
            @dump($arrayId)
            @dump($comics[$arrayId])
        </div>
    </div>
</div>




@endsection