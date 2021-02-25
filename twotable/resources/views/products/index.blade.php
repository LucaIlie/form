@extends('layouts.main')

@section('title','Products')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            @forelse($prodcts as $product)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->nume}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$product->producator}}</h6>
                        <p class="card-text">{{$product->pret}}</p>
                        <p class="card-text">{{$product->cantitate}}</p>
                        <p class="card-text">{{$product->category()->nume}}</p>
                        <p class="card-text">{{$product->category()->sector}}</p>
                    </div>
                </div>
                @empty
            @endforelse
        </div>
    </div>
    @endsection
