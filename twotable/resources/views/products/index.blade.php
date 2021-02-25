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
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="{{route('product.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-group">
                            <label>Nume:</label>
                            <input type="text" name="nume" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 m-auto">
                        <div class="form-group">
                            <label>Producator:</label>
                            <input type="text" name="producator" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 m-auto">
                        <div class="form-group">
                            <label>Pret:</label>
                            <input type="text" name="pret" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 m-auto">
                        <div class="form-group">
                            <label>Cantitate:</label>
                            <input type="text" name="cantitate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 m-auto">
                        <div class="form-group">
                            <label>Categorie:</label>
                            <select name="" id=""></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection
