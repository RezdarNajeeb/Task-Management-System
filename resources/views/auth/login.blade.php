<x-layout>
  <x-slot:pageTitle>Login</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <x-page-heading>Login</x-page-heading>

      <x-forms.form action="/login" method="POST">

        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.input label="Password" name="password" type="password" required />


        <x-forms.checkbox label="Remember Me (Optional)" name="remember" />


        <x-forms.button>Login</x-forms.button>
      </x-forms.form>

      <p class="text-center text-gray-400 mt-6">Don't have an account?
        <a href="/register" class="text-blue-600 hover:text-blue-500">Register</a>
      </p>
    </div>
  </div>
</x-layout>
