@extends('layouts.app')
@section('content')
<form action="{{route('register')}}" method="post" class="w-50 mx-auto ">
    @csrf
    <div class="mb-0 card-header bg-dark text-light py-3" style="text-align: center">
        Create Account
    </div>
    <div class="bg-light">
    
        <div class="mb-2 pt-2">
            <p for="" class="form-label w-75 mx-auto">Full Name</p>
            <input type="text" class="form-control w-75 mx-auto" name="name" value="{{old('name')}}">
            @error('name')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-2 pt-2">
            <p for="" class="form-label w-75 mx-auto">Username</p>
            <input type="text" class="form-control w-75 mx-auto" name="username" value="{{old('username')}}">
            @error('username')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-2 pt-3">
            <p for="" class="form-label w-75 mx-auto">Email</p>
            <input type="email" class="form-control w-75 mx-auto" name="email" value="{{old('email')}}">
            @error('email')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-2 ">
            <p for="" class="form-label w-75 mx-auto">Password</p>
            <input type="password" class="form-control w-75 mx-auto" name="password">
            @error('password')
            <p class="text-danger w-75 mx-auto">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-2 ">
            <p for="" class="form-label w-75 mx-auto">Confirm Password</p>
            <input type="password" class="form-control w-75 mx-auto" name="password_confirmation">
        </div>
        <div class="mb-2 pb-2">
            <input type="submit" style="text-align:center"class="form-control w-75 bg-dark text-light mx-auto " value="Sign up">
        </div>
        <div class="py-10 pb-2">
           <p class="form-label w-75 mx-auto">
               Already registered? <a href="{{route('login')}}">Log into Account</a>
            </p> 
        </div>
    </div>
    </form>
@endsection