@props(['label', 'name'])

@php
  $defaults = [
      'type' => 'checkbox',
      'id' => $name,
      'name' => $name,
      'value' => old($name),
  ];
@endphp

<x-forms.field :$label :$name>

  <div
    class="{{ 'rounded-lg bg-gray-900 border p-2 w-full ' . ($errors->has($name) ? 'border-red-500' : 'border-gray-700') }}">
    <input {{ $attributes($defaults) }}>
    <span class="pl-1">{{ $label }}</span>
  </div>
</x-forms.field>
