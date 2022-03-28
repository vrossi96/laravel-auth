@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-12">
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
                           <th scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($posts as $post)
                           <tr>
                              <th scope="row">{{ $post->id }}</th>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->slug }}</td>
                              <td>{{ $post->updated_at }}</td>
                              <td class="d-flex align-items-center justify-content-between">
                                 <div>
                                    {{-- DETAILS --}}
                                    <a class="btn btn-primary btn-sm"
                                       href="{{ route('admin.posts.show', $post->id) }}">Details</a>
                                    {{-- EDIT --}}
                                    <a class="btn btn-secondary btn-sm"
                                       href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                 </div>
                                 {{-- DELETE POST --}}
                                 <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                 </form>
                              </td>
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
