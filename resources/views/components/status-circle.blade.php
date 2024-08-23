@props(['status'])

@php
  $color = match (strtolower($status)) {
      'to do' => 'bg-blue-500',
      'in progress' => 'bg-yellow-500',
      'complete' => 'bg-green-500',
      default => 'bg-gray-500'
  };
@endphp

<span class="w-4 h-4 inline-block rounded-full {{ $color }}"></span>
