@extends('layouts.app')


@section('content')

<div class="card mx-auto text-white " style="width: 30rem; margin-top: 10%; background-color: #2D3E50">
  <h5 class="card-header text-center">Publication</h5>
<div class="card-body border-top">
  <form method="POST" action="/posts/store" enctype="multipart/form-data">
    @csrf
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <ul>{{$error}}</ul>
          @endforeach
        </ul>
      </div>
      
    @endif
    <input class="form-control" type="text" placeholder="Title" name="title">
    <textarea class="form-control my-1" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Write..."></textarea>
    <div class="form-group">
        <input type="file" name="imagen" id="customFile" accept="image/*">
        <label  for="customFile">Choose file</label>
    </div>
    <select name="categorie_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
      <option selected>Choose section</option>
      <option value="1">Orientation to being</option>
      <option value="2">Physical Culture</option>
      <option value="3">Art</option>
      <option value="4">Health</option>
      <option value="5">Beauty</option>
      </select>
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <button type="submit" class="btn btn-primary mt-4 d-block">To Post</button>
 </form>
</div>
</div>

@endsection