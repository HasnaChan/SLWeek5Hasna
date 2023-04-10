@extends('layouts.main')

@section('title')
    {{ $card['ProductName'] }}
@endsection

@section('container')
<div class="card {{ $card["StatusProduct"] }}" >
    <img class="card-img-top" src="{{ asset('img/' . $card['image']) }}"
    alt="{{ $card['ProductName'] }}" style="width:200px">
    <div class="card-body">
        <h5 class="card-title">Name: {{ $card['ProductName'] }}</h5>
        <h6 class="card-text">Status: {{ $card['StatusProduct'] }}</h6>
        <h6 class="card-text">Price: {{ $card['ProductPrice'] }}</h6>
        <a href="card/{{ $card['id'] }}" class="btn btn-primary">See Detail</a>
    </div>
</div>

@endsection
