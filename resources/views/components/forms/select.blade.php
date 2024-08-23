@props(['label', 'name'])

@php
  $defaults = [
      'id' => $name,
      'name' => $name,
      'class' => 'rounded-lg bg-gray-900 border border-gray-700 p-2 w-full',
  ];
@endphp

<x-forms.field :$label :$name>
  <select {{ $attributes($defaults) }}>
    {{ $slot }}
  </select>
</x-forms.field>
