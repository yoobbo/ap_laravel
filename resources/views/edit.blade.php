@extends('layout')
@section('contact')
    <div class="container">
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" value="{{old('name', $post->name)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <input type="text" name="description" value="{{old('description', $post->description) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Categories</label>
                <select class="form-control" name="category" id="">
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}" {{ $cat->id == $post->category_id  ? 'selected' : '' }}>
                            {{$cat->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-success">Back</a>
        </form>
    </div>
@endsection('contact')