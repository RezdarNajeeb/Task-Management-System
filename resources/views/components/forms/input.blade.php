@props(['label', 'name', 'currentValue' => null])

@php
  $defaults = [
      'type' => 'text',
      'id' => $name,
      'name' => $name,
      'class' =>
          'w-full bg-gray-900 text-gray-100 rounded-lg p-2 border ' .
          ($errors->has($name) ? 'border-red-500' : 'border-gray-700'),
      'value' => old($name, $currentValue),
  ];
@endphp

<x-forms.field :$label :$name>
  <input {{ $attributes($defaults) }} />
</x-forms.field>
