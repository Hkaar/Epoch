@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <div class="min-h-screen grid place-items-center">
    <form action="{{ route('register.post') }}" method="post" class="flex flex-col gap-3 border rounded-md shadow w-[20%] px-6 py-8">
      @csrf

      <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-3">
          <label for="username" class="font-semibold">Username</label>
          <input type="text" name="username" id="username" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter a name">
        
          @error('username')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex flex-col gap-3">
          <label for="email" class="font-semibold">Email</label>
          <input type="email" name="email" id="email" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter your email or username">
        
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex flex-col gap-3">
          <label for="password" class="font-semibold">Password</label>
          <input type="password" name="password" id="password" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter a password">
        
          @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex flex-col gap-3">
          <label for="password_confirmation" class="font-semibold">Confirm your Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="block border-2 border-gray-300 rounded p-2 ease-in-out duration-200" placeholder="Enter the password again">
        
          @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <span class="text-gray-300">Already have an account? go on and
          <a href="{{ route('login') }}" class="text-tertiary underline">login straight away!</a>
        </span>
      </div>

      <button type="submit" class="outline-none rounded px-3 py-4 bg-primary text-white mt-6 hover:scale-105 active:scale-95 active:opacity-80 ease-in-out duration-200">
        Register
      </button>
    </form>
  </div>
@endsection