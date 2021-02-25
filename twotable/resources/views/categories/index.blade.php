@extends('layouts.main')

@section('title','Categories')
@section('content')
    <form action="{{route('')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label>Nume:</label>
                </div>
            </div>
        </div>
    </form>
@endsection
