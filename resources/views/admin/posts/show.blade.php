@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">Manage post</div>
               @if ($post->img)
                  <img class="card-img-top" src="{{ $post->img }}" alt="Post Img">
               @endif
               <div class="card-body">
                  <h3 class="card-title">
                     {{ $post->title }}
                     <sub class="badge badge-pill badge-info"> ID: {{ $post->id }}</sub>
                  </h3>
                  <h4>{{ $post->slug }}</h4>
                  <p class="card-text">{{ $post->content }}</p>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">Creation: {{ $post->created_at }}</li>
                     <li class="list-group-item">Last update: {{ $post->updated_at }}</li>
                  </ul>
                  <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Go to the posts list</a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
