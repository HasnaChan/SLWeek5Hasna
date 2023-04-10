@extends('layouts.main')

@section('title')
    {{ $card['ProductName'] }}
@endsection

@section('container')

{{-- <div class="row row-md-4 justify-content-around"> --}}

    {{-- <div class="col-4 col-md-4 text-center" >
            <div class="card {{ $card["StatusProduct"] }}" >
                    <img class="card-img-top" src="{{ asset('img/' . $card['image']) }}"
                    alt="{{ $card['ProductName'] }}" style="width:200px">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $card['ProductName'] }}</h5>
                        <h6 class="card-text">Status: {{ $card['StatusProduct'] }}</h6>
                        <h6 class="card-text">Price: {{ $card['ProductPrice'] }}</h6>
                        <h5 class="card-title">Description</h5>
                        <h6 class="card-text">{{ $card['ProductDesc'] }}</h6>
                    </div>
            </div>
    </div> --}}

    <div class="card {{ $card["StatusProduct"] }} p-1 justify-content-around flex flex-row" style="width:80rem">
        <img src="{{ asset('img/' . $card['image']) }}" class="card-img-top " alt="{{ $card['ProductName'] }}" style="width:200px" >
        <div class="card-body">
            <h5 class="card-title">Name: {{ $card['ProductName'] }}</h5>
            <h6 class="card-text">Status: {{ $card['StatusProduct'] }}</h6>
            <h6 class="card-text">Price: {{ $card['ProductPrice'] }}</h6>
            <h5 class="card-title">Description</h5>
            <h6 class="card-text">{{ $card['ProductDesc'] }}</h6>
        </div>
      </div>


{{-- </div> --}}

@endsection
