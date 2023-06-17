@extends('blog.mainLayout')  
@section('singleBlog')
 <h1 class="text-center mb-5">Blog details  </h1>
    <div class="card " style="width: 18rem;">
  <img src="{{$blog->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$blog->title ?? ''}}</h5>
    <p class="card-text">{{$blog->description ?? ''}}</p>
     
  </div>
</div>
@endsection
