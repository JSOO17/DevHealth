@extends('layouts.app')

@section('estilos')
 @livewireStyles
@endsection

@section('content')



<div class="card mx-auto text-white " style="width: 25rem; margin-top: 10%; background-color: #2D3E50">
        <h5 class="card-header text-center">{{$post->title}}</h5>

        <div class="card-body border-top">
          <blockquote class="blockquote ">
              <h6 class="mb-4">{{$post->user->name}}</h6>
              <img src="../images/{{$post->pathImg}}" width="100%">
              <small class="blockquote-footer text-right">Date: {{$post->created_at}}</small>
              <p class="mb-0">{{$post->content}}</p>
          </blockquote>
          <div class="my-3">
            <p>Comentarios</p>
            @foreach($post->comments as $comment)
            <div class="border border-white">
              <h6>{{$comment->name}}</h6>
              <p Class="p-2">{{$comment->content}}</p>
            </div>
            @endforeach
          </div>
        </div>

       
    </div>
    @livewireScripts
@endsection