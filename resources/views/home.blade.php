@extends('layout')
@section('contact')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="posts/create" class="btn btn-success">Create</a>
            <a href="logout" class="btn btn-info">Logout</a>
        </div><p></p>
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                @foreach($data as $posts)
                <h5 class="card-title">{{$posts->name}}</h5>
                <p class="card-text">{{$posts->description}}</p>
                <a href="/posts/{{$posts->id}}" class="btn btn-primary">view</a>
                <a href="/posts/{{$posts->id}}/edit" class="btn btn-success">Edit</a>
                <form action="/posts/{{$posts->id}}" method="post" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form><p></p><hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection('contact')