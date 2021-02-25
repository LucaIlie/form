@extends('layouts.main')

@section('title','Categories')
@section('content')
    @forelse($categories as $category)

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$category->nume}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$category->sector}}</h6>
            </div>
        </div>
    @empty
    @endforelse
    <form action="{{route('category.store')}}" method="post">
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
                    <label>Sector:</label>
                    <input type="text" name="sector" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="form-control">
            </div>
        </div>
    </form>
@endsection
