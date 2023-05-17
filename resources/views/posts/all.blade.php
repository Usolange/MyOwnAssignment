@extends('layouts.master')
@section('title', '- Posts')
@section('contents')
<div class="container">
     <div class = "contents-wrapper" style = "display:flex; flex-direction:row; justify-content:space-between">             
              <div>
               <h4>All availabe posted/inserted posts</h4>    
              </div>
              <div>
                    <a class = "btn btn-primary" href="/posts/create">Add new Post</a> 
              </div>
          </div>
          <table class = "table table-striped table-light" style = "margin-top:25px">
               <tr>
                    <th>post ID</th>
                    <th>post Title</th>
                    <th>Body(description)</th>
                    <th>Actions</th>
               </tr>
               @foreach ($data as $post)
               <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                         <a class = "btn btn-primary btn-sm" href="/posts/edit/{{ $post->id }}">Edit post</a>
                         <a class = "btn btn-primary btn-sm" href="/posts/delete/{{ $post->id }}">Delete post</a>
                    </td>
               </tr>     
               @endforeach
          </table>
</div> 
@endsection()

@section('footer')
   @parent()

@endsection()
