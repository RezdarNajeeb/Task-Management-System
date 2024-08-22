<x-layout>
  <x-slot:pageTitle>Register</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <h1 class="text-2xl font-semibold text-center mb-6">Register</h1>
      <form action="" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-400 font-medium mb-2">Name</label>
          <input type="text" id="name" name="name"
            class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2 @error('name') border-red-500 @enderror"
            value="{{ old('name') }}" required autofocus>
          @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="block text-gray-400 font-medium mb-2">Email Address</label>
          <input type="email" id="email" name="email"
            class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2 @error('email') border-red-500 @enderror"
            value="{{ old('email') }}" required>
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

        <div class="mb-4">
          <label for="password_confirmation" class="block text-gray-400 font-medium mb-2">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation"
            class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2" required>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Register</button>
      </form>

      <p class="text-center text-gray-400 mt-6">Already have an account?
        <a href="" class="text-blue-600 hover:text-blue-500">Login</a>
      </p>
    </div>
  </div>
</x-layout>
