@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h2 class="display-2">{{ $product->title }}</h2>
                        <h5 class="text-secondary">{{ $product->stock }} in stock</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-success btn-lg">Purchase</a>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <img src="{{ $product->picture }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
