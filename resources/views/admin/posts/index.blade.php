@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">Posts Manager</div>

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif

                  {{-- POSTS TABLE --}}
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Title</th>
                           <th scope="col">Slug</th>
                           <th scope="col">Updated at</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($posts as $post)
                           <tr>
                              <th scope="row">{{ $post->id }}</th>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->slug }}</td>
                              <td>{{ $post->updated_at }}</td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
            @if ($posts->hasPages())
               {{ $posts->links() }}
            @endif
         </div>
      </div>
   </div>
@endsection
