@props(['method' => 'GET'])

@php
  $method = strtoupper($method);
  $formMethod = in_array($method, ['GET', 'POST']) ? $method : 'POST';
@endphp

<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-6', 'method' => "$formMethod"]) }}>
  @csrf
  @if ($formMethod !== $method)
    @method($method)
  @endif

  {{ $slot }}
</form>
