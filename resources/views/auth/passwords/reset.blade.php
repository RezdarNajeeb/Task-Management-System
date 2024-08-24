<x-layout>
  <x-slot:pageTitle>Reset Password</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <x-page-heading>Reset Password</x-page-heading>

      <x-forms.form action="{{ route('password.update') }}" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">
        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.input label="Password" name="password" type="password" required />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" required />
        <x-forms.button>Reset Password</x-forms.button>
      </x-forms.form>
    </div>
  </div>
</x-layout>
