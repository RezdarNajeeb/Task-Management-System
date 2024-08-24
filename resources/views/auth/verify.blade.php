<x-layout>
  <x-slot:pageTitle>Verify Email</x-slot:pageTitle>

  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 text-gray-100 p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold mb-4">{{ __('Verify Your Email Address') }}</h2>

      @if (session('resent'))
        <div class="bg-green-500 text-white text-sm font-medium px-4 py-3 rounded mb-4" role="alert">
          {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
      @endif

      <p class="mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
      <p class="mb-4">{{ __('If you did not receive the email') }},</p>

      <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="text-blue-500 hover:underline">{{ __('click here to request another') }}</button>.
      </form>
    </div>
  </div>
</x-layout>
