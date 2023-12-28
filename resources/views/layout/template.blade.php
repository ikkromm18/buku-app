<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')
    <div class="px-10">
      @yield('container')
    </div>
  
</body>

</html>