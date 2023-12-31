
@extends('layout.clearTemplate')

@section('container')

<div class="bg-gray-100 flex justify-center items-center h-screen">
  <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
<img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
<h1 class="text-2xl font-semibold mb-4">Sign Up</h1>
<form action="/signup" method="POST">
  {{-- nama Input --}}
  @csrf
  <div class="mb-4">
    <label for="nama" class="block text-gray-600">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" autofocus required value="{{old('nama')}}">
    @error('nama')
     <p class="text-red-500 text-xs">{{$message}}</p>   
    @enderror
  </div>
    
  <!-- Username Input -->
  <div class="mb-4">
    <label for="email" class="block text-gray-600">Email</label>
    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required value="{{old('email')}}">
    @error('email')
    <p class="text-red-500 text-xs">{{$message}}</p>   
    @enderror
  </div>

  {{-- No.HP Input --}}
  <div class="mb-4">
    <label for="no_hp" class="block text-gray-600">No. HP</label>
    <input type="number" id="no_hp" name="no_hp" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required value="{{old('no_hp')}}">
    @error('no_hp')
       <p class="text-red-500 text-xs">{{$message}}</p>   
    @enderror
  </div>

  <!-- Password Input -->
  <div class="mb-4">
    <label for="password" class="block text-gray-600">Password</label>
    <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required>
    @error('password')
       <p class="text-red-500 text-xs">{{$message}}</p>   
      @enderror
  </div>

  <!-- Login Button -->
  <button type="submit" class="bg-gray-800 hover:bg-gray-400 text-white font-semibold rounded-md py-2 px-4 w-full">Register</button>
</form>
<!-- Sign up  Link -->
<div class="mt-4 text-center">
  <p><a href="/login" class="hover:underline  text-blue-500">Have an Account</a> or <a href="/" class=" text-blue-500 hover:underline">Back</a></p>
</div>
</div>
</div>

@endsection 
