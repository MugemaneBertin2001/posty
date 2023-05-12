@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post" class="w-50 mx-auto ">
@csrf
<div class="mb-0 card-header bg-dark text-light py-3" style="text-align: center">
    Log into Account
</div>
<div class="bg-light">
    <div class="mb-3 pt-3 ">
        @if (session('status'))
        <p 
        style="text-align: center;
         border-radius:3px;
         padding:5px 0; 
         color:white;
         " class="form-label w-75 mx-auto bg-danger">{{session('status')}}</p>
         @endif
    </div>
    <div class="mb-3 pt-3">
    <p for="" class="form-label w-75 mx-auto">Email</p>
    <input type="email" class="form-control w-75 mx-auto" name="email">
    @error('email')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
    </div>
    <div class="my-3 ">
    <p for="" class="form-label w-75 mx-auto">Password</p>
    <input type="password" class="form-control w-75 mx-auto" name="password">
    @error('password')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
    </div>
    <div class="my-3 ">
        <p class="form-label w-75 mx-auto">
            <input type="checkbox" name="remember">
            <label>Remember me</label>
        </p>
    
    </div>
    <div class="my-3 pb-3">
    <input type="submit" style="text-align:center"class="form-control w-75 bg-dark text-light mx-auto " value="Sign in">
    </div>
    <div class="py-10 pb-3">
       <p class="form-label w-75 mx-auto">
           New here? <a href="{{route('register')}}">Create Account</a>
        </p> 
    </div>
</div>
</form>

@endsection