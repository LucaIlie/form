@extends('layouts.main')

@section('title','Categories')
@section('content')
    <form action="{{route('')}}" method="post">
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
