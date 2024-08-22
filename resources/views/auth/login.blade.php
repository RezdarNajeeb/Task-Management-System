<x-layout>
  <x-slot:pageTitle>Register</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <h1 class="text-2xl font-semibold text-center mb-6">Login</h1>
      <form action="" method="POST">
        @csrf
        <div class="mb-4">
          <label for="email" class="block text-gray-400 font-medium mb-2">Email Address</label>
          <input type="email" id="email" name="email"
            class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2 @error('email') border-red-500 @enderror"
            required autofocus>
          @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="block text-gray-400 font-medium mb-2">Password</label>
          <input type="password" id="password" name="password"
            class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2 @error('password') border-red-500 @enderror"
            required>
          @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember"
              class="form-checkbox text-blue-600 bg-gray-900 border-gray-700 rounded">
            <label for="remember" class="ml-2 text-gray-400">Remember Me</label>
          </div>
          @if (Route::has('password.request'))
            <a href="" class="text-sm text-blue-600 hover:text-blue-500">Forgot Your
              Password?</a>
          @endif
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</button>
      </form>

      <p class="text-center text-gray-400 mt-6">Don't have an account?
        <a href="" class="text-blue-600 hover:text-blue-500">Register</a>
      </p>
    </div>
  </div>
</x-layout>
