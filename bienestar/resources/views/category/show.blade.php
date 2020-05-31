@extends('layouts.app')


@section('content')

<h2>{{$categorie->category}}</h2>

@foreach($categorie->posts as $post)

<div class="card mx-auto text-white " style="width: 25rem; margin-top: 10%; background-color: #2D3E50">
        <h5 class="card-header text-center">{{$post->title}}</h5>

        <div class="card-body border-top">
          <blockquote class="blockquote ">
              <h6 class="mb-4">{{$post->user->name}}</h6>
              <small class="text-left mb-3" style="font-size: 13px;">Category: {{$post->categorie->category}}</small>
              <img src="../images/{{$post->pathImg}}" width="100%">
              <small class="text-right">Date: {{$post->created_at}}</small>
              <p class="mb-0">{{$post->content}}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-info btn-sm">View post..</a>
          </blockquote>
        </div>
        
       
    </div>
@endforeach
@endsection