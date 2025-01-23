@extends('layout')
@section('contact')
    <div class="container">
        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Categories</label>
                <select class="form-control" name="category" id="">
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>

            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-primary">back</a>
        </form>
    </div>
@endsection('contact')