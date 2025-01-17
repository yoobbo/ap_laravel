@extends('layout')
@section('contact')
    <div class="container">
        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-primary">back</a>
        </form>
    </div>
@endsection('contact')