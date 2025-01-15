@extends("layout")
@section("contact")
    <h1 class="text-center">Home<h1>
    <div class="container">
        <div class="card">
            <h5 class="card-header text-center">Featured</h5>
            <div class="card-body">
                @foreach($data as $row)
                <h5 class="card-title">{{$row->name}}</h5>
                <p class="card-text">{{$row->description}}</p>
                <a href="{{$row->id}}" class="btn btn-primary">View</a><p></p>
                @endforeach

            </div>
            
        </div>
    </div>
@endsection