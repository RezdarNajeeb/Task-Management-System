<!DOCTYPE html>
<html lang="en" class="dark">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="bg-gray-900 text-gray-100 pb-6">
    <nav class="bg-gray-800 shadow-md sticky top-0 z-50">
      <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="" class="text-xl font-bold text-gray-100">Task Management</a>
        <div>
          @auth
            <div class="flex items-center space-x-4">
              <a href="" class="text-gray-400 hover:text-gray-200">Create
                Task</a>
              <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button href="" class="text-gray-400 hover:text-gray-200">
                  Logout
                </button>
              </form>
            </div>
          @endauth
          @guest
            <a href="" class="text-gray-400 hover:text-gray-200 mr-4">Login</a>
            <a href="" class="text-gray-400 hover:text-gray-200">Register</a>
          @endguest
        </div>
      </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">
      {{ $slot }}
    </div>
  </body>

</html>
