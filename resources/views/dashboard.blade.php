@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container"  style = "height: 70vh;">
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
    <h4 class="text-center">Welcome to my postsApplicatin Potrol admin dashboard</h4>
  </div>
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
  <img src="{{ asset('images\Tumba logo.png') }}" style = "height:80%; width:100%; margin-bottom:45px" alt="Uploaded Image">

  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()