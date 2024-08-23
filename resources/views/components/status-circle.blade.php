@props(['status'])

@php
  $color = match (strtolower($status)) {
      'To Do' => 'bg-blue-500',
      'In Progress' => 'bg-yellow-500',
      'Complete' => 'bg-green-500',
      default => 'bg-gray-500'
  };
@endphp

<span class="w-4 h-4 inline-block rounded-full {{ $color }}"></span>
