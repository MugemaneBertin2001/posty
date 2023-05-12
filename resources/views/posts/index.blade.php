@extends('layouts.app')
@section('content')
<form action="{{route('posts')}}" method="post" class="w-50 mx-auto" >
@csrf
<div class="bg-light p-4" id="post">
    <div class="mb-3">
      <textarea class="form-control mx-auto" name="body" id="" rows="3" placeholder="What's on your mind?"></textarea>
    </div>
    <div class="pb-3">
      <input type="submit" value="Post" class="btn btn-info">
    </div>
</div>   

</form>

@endsection