<x-layout>
  <x-slot:pageTitle>Register</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <x-page-heading>Register</x-page-heading>

      <x-forms.form action="/register" method="POST">

        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

        <x-forms.button>Register</x-forms.button>
      </x-forms.form>

      <p class="text-center text-gray-400 mt-6">Already have an account?
        <a href="/login" class="text-blue-600 hover:text-blue-500">Login</a>
      </p>
    </div>
  </div>
</x-layout>
