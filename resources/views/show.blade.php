@extends('layout')
@section('contact')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <p class="card-text text-primary">{{$post->categories->name}}</p>
                <a href="/posts" class="btn btn-primary">back</a><p></p><hr>
            </div>
        </div>
    </div>
@endsection('contact')