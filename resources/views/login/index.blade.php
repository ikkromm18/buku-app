
@extends('layout.clearTemplate')

@section('container')

<div class="bg-gray-100 flex justify-center items-center h-screen">
  <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
<img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  @if (session()->has('success'))
      <p class="text-xs text-green-400">{{ session('success')}}</p>
  @endif
  @if (session()->has('loginError'))
      <p class="text-xs text-red-500">{{ session('loginError')}}</p>
  @endif
<h1 class="text-2xl font-semibold mb-4">Login</h1>
<form action="/login" method="POST">
  <!-- Email Input -->
  @csrf
  <div class="mb-4">
    <label for="email" class="block text-gray-600">Email</label>
    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" value="{{old('email')}}" autofocus required>
    @error('email')
    <p class="text-red-500 text-xs">{{$message}}</p>   
   @enderror
  </div>
  <!-- Password Input -->
  <div class="mb-4">
    <label for="password" class="block text-gray-600">Password</label>
    <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    @error('password')
    <p class="text-red-500 text-xs">{{$message}}</p>   
   @enderror
  </div>

  <!-- Forgot Password Link -->
  {{-- <div class="mb-6 text-blue-500">
    <a href="#" class="hover:underline">Forgot Password?</a>
  </div> --}}

  <!-- Login Button -->
  <button type="submit" class="bg-gray-800 hover:bg-gray-400 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
</form>
<!-- Sign up  Link -->
<div class="mt-4 text-center">
  <p><a href="/signup" class="hover:underline  text-blue-500">Sign up Here</a> or <a href="/" class=" text-blue-500 hover:underline">Back</a></p>
</div>
</div>
</div>

@endsection
