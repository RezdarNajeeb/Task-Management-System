<!DOCTYPE html>
<html lang="en" class="dark">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="bg-gray-900 text-gray-100">
    <nav class="bg-gray-800 shadow-md">
      <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="" class="text-xl font-bold text-gray-100">Task Management</a>
        <div>
          @auth
            <a href=""
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="text-gray-400 hover:text-gray-200">
              Logout
            </a>
            <form id="logout-form" action="" method="POST" class="hidden">
              @csrf
            </form>
          @else
            <a href="" class="text-gray-400 hover:text-gray-200 mr-4">Login</a>
            <a href="" class="text-gray-400 hover:text-gray-200">Register</a>
          @endauth
        </div>
      </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">
      {{ $slot }}
    </div>
  </body>

</html>
