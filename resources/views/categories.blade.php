@extends('template.main')

@section('container')
<h1 class="mb-5">Categories</h1>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center bg-dark bg-opacity-50 flex-fill p-4 fs-3">{{ $category->name }}</h5>
                        
                        </div>
                    </div>
                </a>
            </div>
        
        @endforeach
    </div>
</div>
@endsection