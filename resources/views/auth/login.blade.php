@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div class="min-h-screen grid place-items-center">
    <form action="{{ route('login.post') }}" method="post" class="flex flex-col gap-3 border rounded-md shadow w-[20%] px-6 py-8">
      @csrf

      <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-3">
          <label for="username" class="font-semibold">Username or Email</label>
          <input type="text" name="username" id="username" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter your email or username"
            required>
        
          @error('username')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="flex flex-col gap-3">
          <label for="password" class="font-semibold">Password</label>
          <input type="password" name="password" id="password" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter your password"
            required>
        
          @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <span class="text-gray-300">Don't have an account yet? try 
          <a href="{{ route('register') }}" class="text-tertiary underline">registering with us!</a>
        </span>
      </div>

      <button type="submit" class="outline-none rounded px-3 py-4 bg-primary text-white mt-6 hover:scale-105 active:scale-95 active:opacity-80 ease-in-out duration-200">
        Login
      </button>
    </form>
  </div>
@endsection