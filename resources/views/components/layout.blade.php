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
        <a href="/tasks" class="text-xl font-bold text-gray-100">Task Management</a>
        <div>
          @auth
            <div class="flex items-center space-x-4">
              <a href="/tasks/create" class="text-blue-400 hover:text-blue-500">Create
                Task</a>
              <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button href="" class="text-red-400 hover:text-red-500">
                  Logout
                </button>
              </form>
            </div>
          @endauth
          @guest
            <a href="" class="text-blue-400 hover:text-blue-500 mr-4">Login</a>
            <a href="" class="text-green-400 hover:text-green-500">Register</a>
          @endguest
        </div>
      </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">
      {{ $slot }}
    </div>
  </body>

</html>
