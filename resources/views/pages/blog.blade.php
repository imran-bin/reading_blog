@extends('blog.mainLayout')

@section('allBlog')
  <h1 class="text-center mb-5">Our Blog</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      
        @foreach ($blogs as $blog)
            <div class="col">
                <div class="card">
                    <img src="{{ $blog->image ?? '' }}" class="card-img-top" alt="prince">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title ?? '' }}</h5>
                        <p class="card-text">{{ $blog->description ?? '' }}</p>
                    </div>
                    <p><br><br> <a href="{{ URL::to('/blog/single/'.$blog->id)}}" class="btn btn-primary">View More</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('carosiol')
    @include('blog.carosiol')
@endsection
