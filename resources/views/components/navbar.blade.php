<nav class="bg-transparent text-white px-1 py-3 z-50 absolute w-full">
  <div class="flex flex-row px-10 justify-between">
     
    <div class="flex flex-row justify-evenly gap-6 font-light py-1 items-center">  
        <a class="font-semibold text-lg" href="/"><h1>M18 Book</h1></a>
        <a href="/" class="hover:font-semibold px-4">Home</a>
        <a href="#" class="hover:font-semibold px-4">Our Product</a>
        <a href="#" class="hover:font-semibold px-4">Favorite</a>
        <a href="#" class="hover:font-semibold px-4">Contact Us</a>
      </div>

      @auth
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Profile dropdown -->
        <h3 class="font-light">{{auth()->user()->nama}}</h3>

        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
        </div>

        <div class="pl-2">
          
          <form action="/logout" method="post">
            @csrf
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:bg-gray-600">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
          </button>
          </form>
          
        </div>
      </div>
      @else

      <div class="text-black flex gap-4 items-center">
        <a href="/signup" class="text-white hover:font-semibold">Sign Up</a>
        <a href="/login" class="bg-white px-2 py-1 rounded-md font-semibold">Login</a>
      </div>

      @endauth

  </div>
</nav>