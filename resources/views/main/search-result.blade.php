@extends('main.layout.index')
@section('content')
<div class="title search-result  first-content">
    <div class="section">
        <h1>{{count($product)}} results <span></span></h1>
        <p>We have found one match with the word you searched.</p>
        <br><br>

    </div>
    @foreach($product as $item)
    <div class="page">
        <div class="ha"><img src="img/{{$item->img}}" alt="" id="img"></div>
        <div class="text">
            <h3>{{$item->name}}</h3>
            <p>{{$item->description}}</p>
            <a href="{{route('addcart',$item->id)}}"><button class="button">Add to cart</button> &emsp; <span>continue</span></a>
        </div>
    </div>
    @endforeach
    <div></div>
</div>
@endsection