@extends('layouts.app')
@section('content')
<form action="{{route('posts')}}" method="post" class="w-50 mx-auto pt-2 " >
@csrf
<div class="bg-light p-4" id="post">
    <div class="mb-3">
      <textarea class="form-control mx-auto" name="body" id="" rows="3" placeholder="What's on your mind?"></textarea>
      @error('body')
              <p class="text-danger w-75">
                  {{$message}}
              </p>
      @enderror
    </div>
    <div class="">
      <input type="submit" value="Post" class="btn btn-info">
    </div>
</div>   
</form>
<div class="w-50 bg-light mx-auto px-2 p-4 mb-2" id="post">

  @if ($posts->count())
    @foreach ($posts as $post)
    <div class=" border px-4 pt-2 my-2" id="post">
      <div class="mb-3">
      <p>
        <a href="{{route('users.posts',$post->user)}}">{{$post->user->username}}</a>
      </p>
      <p>
        {{$post->body}}
      </p>
      <p>
        <i>{{$post->created_at->diffForHumans()}}</i>
      </p>
    </div>
    @can('delete', $post)
      <div>
        <form action="{{route('delete-post',$post)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value='Delete'/>
        </form>
      </div>
    @endcan
    <div class="d-flex row ">
      @if (!$post->likedBy(auth()->user()))
        <form action="{{route('posts.likes',$post)}}" method="post" class="mx-3 ">
          @csrf
          <input type="submit"class="btn btn-info" value='Like' />
        </form>
      @else
        <form action="{{route('posts.likes',$post)}}" method="post" class="mx-3">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-warning" value='Unlike'/>
          {{-- <span>
            {{$post->likes->count()}}
          </span> --}}
        </form>
      @endif
      <span>
        {{$post->likes->count()}}
        @if ($post->likes->count()<2 )
            like
        @else
            likes
        @endif
      </span>
    </div>
  </div>
      
  @endforeach
  <div>
    {{$posts->links()}} 
  </div>
  @else
  <div class=" border px-4 pt-2" id="post">
  <label for="">
    No posts yet!
  </label>
  </div>
  @endif
</div>  
</div>
@endsection