@props(['method' => 'GET'])

@php
  $method = strtoupper($method);
  $formMethod = $method === 'GET' || $method === 'POST' ? $method : 'POST';
@endphp

<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-6', 'method' => $formMethod]) }}>
  @if ($formMethod === 'POST')
    @csrf
  @endif
  @if ($formMethod !== $method)
    @method($method)
  @endif

  {{ $slot }}
</form>
