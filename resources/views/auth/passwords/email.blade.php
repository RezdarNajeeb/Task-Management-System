<x-layout>
  <x-slot:pageTitle>Reset Password</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md">
      <x-page-heading>Reset Password</x-page-heading>

      @if (session('status'))
        <div class="bg-green-500 text-white text-sm font-medium px-4 py-3 rounded mb-4" role="alert">
          {{ session('status') }}
        </div>
      @endif

      <x-forms.form action="{{ route('password.email') }}" method="POST">
        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.button>Send Password Reset Link</x-forms.button>
      </x-forms.form>
    </div>
  </div>
</x-layout>
